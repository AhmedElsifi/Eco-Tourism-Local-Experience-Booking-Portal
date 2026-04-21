<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?php $title ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        secondary: "#765934",
                        "surface-container": "#edeee9",
                        "primary-fixed": "#c8ebd0",
                        "tertiary-fixed": "#f5e0ba",
                        surface: "#f8faf5",
                        "on-background": "#191c19",
                        "error-container": "#ffdad6",
                        "on-tertiary": "#ffffff",
                        "on-secondary": "#ffffff",
                        background: "#f8faf5",
                        "surface-container-low": "#f3f4ef",
                        "inverse-on-surface": "#f0f1ec",
                        "on-primary": "#ffffff",
                        tertiary: "#392d13",
                        "inverse-surface": "#2e312e",
                        "on-secondary-fixed": "#2a1800",
                        "inverse-primary": "#adcfb4",
                        "surface-variant": "#e1e3de",
                        "surface-bright": "#f8faf5",
                        "on-primary-fixed-variant": "#2f4d39",
                        "on-surface-variant": "#424843",
                        "secondary-fixed": "#ffddb6",
                        "on-error": "#ffffff",
                        "outline-variant": "#c2c8c0",
                        "surface-container-high": "#e7e9e4",
                        outline: "#727972",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#e1e3de",
                        "primary-fixed-dim": "#adcfb4",
                        "secondary-container": "#fed6a7",
                        "on-tertiary-fixed-variant": "#534529",
                        "on-primary-fixed": "#022110",
                        "surface-tint": "#466550",
                        primary: "#163422",
                        "surface-dim": "#d9dbd6",
                        "surface-container-lowest": "#ffffff",
                        "primary-container": "#2d4b37",
                        "on-surface": "#191c19",
                        "on-tertiary-container": "#c3b08c",
                        "tertiary-fixed-dim": "#d8c49f",
                        "tertiary-container": "#504327",
                        error: "#ba1a1a",
                        "on-secondary-container": "#795b36",
                        "on-secondary-fixed-variant": "#5c421f",
                        "secondary-fixed-dim": "#e6c093",
                        "on-primary-container": "#99baa1",
                        "on-tertiary-fixed": "#241a03",
                    },
                    borderRadius: {
                        DEFAULT: "0px",
                        lg: "0px",
                        xl: "0px",
                        full: "0px",
                    },
                    fontFamily: {
                        headline: ["Manrope"],
                        body: ["Inter"],
                        label: ["Inter"],
                    },
                },
            },
        };
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                "FILL" 0,
                "wght" 400,
                "GRAD" 0,
                "opsz" 24;
        }

        body {
            font-family: "Inter", sans-serif;
        }

        h1,
        h2,
        h3,
        .font-headline {
            font-family: "Manrope", sans-serif;
        }
    </style>
</head>