STAT Major
============================


### Project map:
    
    STAT_Major
    ├── config          # Store the configuration file such as database configuration
    ├── media           # Contain only media files (.png, .jpg, .jpeg, .mp4, etc...)
    ├── public          # Store the public files accessed directly by the users
    │  └── index.php    # Home page
    │
    ├── src             # Store the source files that should not be exposed to the public
    │  ├── inc          # Store the commonly included files such as the header and footer of a page
    │  └── libs         # Store the library files, e.g., validation, sanitization, etc.
    │
    ├── template        # Contain temporary templates
    ├── README.me
    └── .htaccess