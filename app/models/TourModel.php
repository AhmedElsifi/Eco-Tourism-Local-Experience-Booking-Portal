<?php

require_once __DIR__ . "/../../core/connection.php";

class TourModel
{
    private $db;

    public function __construct()
    {
        global $connect;
        $this->db = $connect;
    }

    public function getTourById($tourId)
    {
        $stmt = $this->db->prepare("
            SELECT t.*, l.location_name, l.country, l.region,
                   u.name as guide_name
            FROM tour t
            JOIN location l ON t.location_id = l.location_id
            JOIN users u ON t.guide_id = u.user_id
            WHERE t.tour_id = ?
        ");
        $stmt->execute([$tourId]);
        return $stmt->fetch();
    }

    public function getTourVersions($tourId)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM tour_version 
            WHERE tour_id = ?
            ORDER BY created_at DESC
        ");
        $stmt->execute([$tourId]);
        return $stmt->fetchAll();
    }

    public function getActiveVersion($tourId)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM tour_version 
            WHERE tour_id = ? AND is_active = 1
            LIMIT 1
        ");
        $stmt->execute([$tourId]);
        return $stmt->fetch();
    }

    public function createTour($guideId, $data)
    {
        $stmt = $this->db->prepare("
            INSERT INTO tour (tour_name, guide_id, location_id, tour_type, status, carbon_footprint, waste_management, local_hiring)
            VALUES (?, ?, ?, ?, 'draft', ?, ?, ?)
        ");
        try {
            $stmt->execute([
                $data['tour_name'],
                $guideId,
                $data['location_id'],
                $data['tour_type'] ?? 'eco',
                $data['carbon_footprint'] ?? null,
                $data['waste_management'] ?? null,
                $data['local_hiring'] ?? 0
            ]);
            return $this->db->lastInsertId();
        } catch (Exception $e) {
            return false;
        }
    }

    public function updateTour($tourId, $data)
    {
        $fields = [];
        $params = [];

        foreach ($data as $key => $value) {
            $fields[] = "$key = ?";
            $params[] = $value;
        }
        $params[] = $tourId;

        $sql = "UPDATE tour SET " . implode(", ", $fields) . " WHERE tour_id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
    }

    public function createTourVersion($tourId, $data)
    {
        $stmt = $this->db->prepare("
            INSERT INTO tour_version (tour_id, version_name, price_per_person, max_capacity, is_active)
            VALUES (?, ?, ?, ?, 1)
        ");
        try {
            $stmt->execute([
                $tourId,
                $data['version_name'],
                $data['price_per_person'],
                $data['max_capacity']
            ]);
            return $this->db->lastInsertId();
        } catch (Exception $e) {
            return false;
        }
    }

    public function updateTourVersion($versionId, $data)
    {
        $fields = [];
        $params = [];

        foreach ($data as $key => $value) {
            $fields[] = "$key = ?";
            $params[] = $value;
        }
        $params[] = $versionId;

        $sql = "UPDATE tour_version SET " . implode(", ", $fields) . " WHERE tour_version_id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
    }

    public function getImpactTags($tourId)
    {
        $stmt = $this->db->prepare("SELECT * FROM tour_impact_tag WHERE tour_id = ?");
        $stmt->execute([$tourId]);
        return $stmt->fetchAll();
    }

    public function addImpactTag($tourId, $tagName)
    {
        $stmt = $this->db->prepare("
            INSERT INTO tour_impact_tag (tour_id, tag_name)
            VALUES (?, ?)
        ");
        try {
            $stmt->execute([$tourId, $tagName]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function removeImpactTag($tourId, $tagName)
    {
        $stmt = $this->db->prepare("
            DELETE FROM tour_impact_tag WHERE tour_id = ? AND tag_name = ?
        ");
        return $stmt->execute([$tourId, $tagName]);
    }

    public function getItineraries($tourId)
    {
        $stmt = $this->db->prepare("
            SELECT i.*, l.language_name, l.language_code
            FROM itinerary i
            LEFT JOIN languages l ON i.language_id = l.language_id
            WHERE i.tour_id = ?
            ORDER BY i.version DESC
        ");
        $stmt->execute([$tourId]);
        return $stmt->fetchAll();
    }

    public function updateItinerary($tourId, $languageId, $content)
    {
        $stmt = $this->db->prepare("
            INSERT INTO itinerary (tour_id, language_id, version, content)
            VALUES (?, ?, (SELECT COALESCE(MAX(version), 0) + 1 FROM (SELECT MAX(version) as version FROM itinerary WHERE tour_id = ? AND language_id = ?) as temp), ?)
        ");
        try {
            $stmt->execute([$tourId, $languageId, $tourId, $languageId, $content]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function getLocations()
    {
        $stmt = $this->db->query("SELECT * FROM location ORDER BY location_name");
        return $stmt->fetchAll();
    }

    public function getLocationById($locationId)
    {
        $stmt = $this->db->prepare("SELECT * FROM location WHERE location_id = ?");
        $stmt->execute([$locationId]);
        return $stmt->fetch();
    }

    public function getRouteStops($routeId)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM route_stops 
            WHERE route_id = ?
            ORDER BY stop_order
        ");
        $stmt->execute([$routeId]);
        return $stmt->fetchAll();
    }

    public function getTourRoutes($tourId)
    {
        $stmt = $this->db->prepare("SELECT * FROM tour_routes WHERE tour_id = ?");
        $stmt->execute([$tourId]);
        return $stmt->fetchAll();
    }

    public function getTourRouteById($routeId)
    {
        $stmt = $this->db->prepare("SELECT * FROM tour_routes WHERE route_id = ?");
        $stmt->execute([$routeId]);
        return $stmt->fetch();
    }

    public function createTourRoute($tourId, $data)
    {
        $stmt = $this->db->prepare("
            INSERT INTO tour_routes (tour_id, route_name, total_distance_km, estimated_emission, eco_score)
            VALUES (?, ?, ?, ?, ?)
        ");
        try {
            $stmt->execute([
                $tourId,
                $data['route_name'],
                $data['total_distance_km'] ?? null,
                $data['estimated_emission'] ?? null,
                $data['eco_score'] ?? null
            ]);
            return $this->db->lastInsertId();
        } catch (Exception $e) {
            return false;
        }
    }

    public function addRouteStop($routeId, $stopName, $order, $latitude = null, $longitude = null)
    {
        $stmt = $this->db->prepare("
            INSERT INTO route_stops (route_id, stop_name, stop_order, latitude, longitude)
            VALUES (?, ?, ?, ?, ?)
        ");
        return $stmt->execute([$routeId, $stopName, $order, $latitude, $longitude]);
    }

    public function deleteRouteStop($stopId)
    {
        $stmt = $this->db->prepare("DELETE FROM route_stops WHERE id = ?");
        return $stmt->execute([$stopId]);
    }

    public function searchTours($filters = [])
    {
        $sql = "
            SELECT t.tour_id, t.tour_name, t.tour_type, t.status,
                   l.location_name, l.country,
                   tv.price_per_person, tv.max_capacity, tv.tour_version_id,
                   u.name as guide_name
            FROM tour t
            JOIN location l ON t.location_id = l.location_id
            JOIN tour_version tv ON t.tour_id = tv.tour_id
            JOIN users u ON t.guide_id = u.user_id
            WHERE tv.is_active = 1
        ";
        $params = [];

        if (!empty($filters['location_id'])) {
            $sql .= " AND t.location_id = ?";
            $params[] = $filters['location_id'];
        }
        if (!empty($filters['tour_type'])) {
            $sql .= " AND t.tour_type = ?";
            $params[] = $filters['tour_type'];
        }
        if (!empty($filters['min_price'])) {
            $sql .= " AND tv.price_per_person >= ?";
            $params[] = $filters['min_price'];
        }
        if (!empty($filters['max_price'])) {
            $sql .= " AND tv.price_per_person <= ?";
            $params[] = $filters['max_price'];
        }

        $sql .= " ORDER BY tv.price_per_person";

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }
}