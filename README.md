![Alt text](media/Banner.png "STAT Major")

This website will orginaizy all statistcs major subjects and thier content (Notes, Past exams, etc...)
I'll create admin system to add and remove subjects and pages.

### Project map

    STAT_Major
    ├── config  # Store the configuration file such as database configuration
    │  └── config.php   # All configuration
    │
    ├── download    # Files can anyone download it
    ├── media       # Contain only media files (.png, .jpg, .jpeg, .mp4, etc...)
    ├── public      # Store the public files accessed directly by the users
    │  ├── index.php    # Home page
    │  └── subject.php  # This page will display all subject stored in database
    │
    ├── src     # Store the source files that should not be exposed to the public
    │  ├── inc      # Store the commonly included files such as the header and footer of a page
    │  │  ├── js        # Store all javascript files
    │  │  ├── webfonts  # For icons
    │  │  └── css       # Store all css files
    │  │
    │  └── libs # Store the library files, e.g., validation, sanitization, etc.
    │     ├── manage    # All functions for manage dashboard.
    │     │  ├── manageFun.php          # Contain general functions for use in manage page
    │     │  └── manage_subjectsFun.php # Contain all functions for manage subjects (Such as add, edit and remove subjects)
    │     │
    │     ├── database.php      # Contain all database function (such as connect, select, etc...)
    │     └── subjectsFun.php   # Contain all functions used subject page in public folder.
    │
    ├── manage  # Dashboard to manage the website (Access only by Admin).
    │  ├── src      # Store the source files for manage
    │  │  ├── inc       # Store the commonly included files such as the header and footer of a page
    │  │  │  └── ...
    │  │  │
    │  │  └── libs      # Store the library files, e.g., validation, sanitization, etc.
    │  │     ├── footer.php     # This is defualt footer for all manage pages.
    │  │     ├── header.php     # This is defualt header for all manage pages.
    │  │     └── subjectsFun.php    # This file contain all functions for manage subjects (Such as add, edit and delete subjects)
    │  │
    │  ├── index.php    # Home page, for display some statistics, lat~est events and top members.
    │  └── subjects.php # Display all subjects and you can add, change and delete subjects.
    │
    ├── .htaccess
    └── README.me