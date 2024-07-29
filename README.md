# ChristPraises.in
App for everyone to share the amazing things God is doing in their lives!
### File Structure
```
ChristPraises.in/
├── admin-panel/
├── api/
├── assets/
├── ffmpeg/
├── icons/
├── install/
├── nodejs/
├── sources/
├── splash_screens/
├── themes/
├── xhr/
├── .gitignore
├── .htaccess
├── .user.ini
├── README.md
├── admin_load.php
├── admincp.php
├── ajax_loading.php
├── api-v2.php
├── api.php
├── app_api.php
├── cron-job.php
├── expire_pro.php
├── htaccess.txt
├── index.php
├── login-with.php
├── manifest-index.json
├── manifest.json
├── nginx.conf
├── php.ini
├── pro.php
├── pwabuilder-sw.js
├── requests.php
├── robots.txt
├── service-worker.js
├── sitemap-index.xml
├── sitemap.xml
├── system_status.php
├── updater.php
├── web.config.xml
├── wowonder.sql
```

### Flow of Requests (Hierarchy Format)
1. **User Interactions**
   - `index.php`: Entry point for the web application, handles routing to various features.
   - `login-with.php`: Manages user login via different methods.
   - `ajax_loading.php`: Handles AJAX requests for dynamic content loading.

2. **API Endpoints**
   - `api.php`: General API handling for various requests.
   - `api-v2.php`: Newer version of the API with enhanced functionalities.
   - `app_api.php`: API for mobile app interactions.

3. **Admin Functions**
   - `admincp.php`: Admin control panel for managing the application.
   - `admin_load.php`: Loads administrative tools and features.

4. **Background Processes**
   - `cron-job.php`: Manages scheduled tasks and cron jobs.
   - `expire_pro.php`: Handles expiration of pro features and subscriptions.

5. **System Management**
   - `system_status.php`: Monitors and reports the status of the system.
   - `updater.php`: Manages updates to the application.

## Flow of Requests

### User Interactions
- `index.php`: Main entry point.
- `login-with.php`: User login handling.
- `ajax_loading.php`: AJAX content loading.

### API Endpoints
- `api.php`: General API.
- `api-v2.php`: Updated API.
- `app_api.php`: Mobile app API.

### Admin Functions
- `admincp.php`: Admin control panel.
- `admin_load.php`: Admin tools loading.

### Background Processes
- `cron-job.php`: Scheduled tasks.
- `expire_pro.php`: Pro feature expiration.
***
### System Management
- `system_status.php`: System status monitoring.
- `updater.php`: Application updates.

## Function Descriptions
- **welcome.php**: Is the entry point of user log in.
- **index.php**: Initializes the web application and routes user requests to appropriate controllers.
- **login-with.php**: Facilitates user authentication through various providers.
- **ajax_loading.php**: Processes AJAX calls for dynamic content loading.
- **api.php**: Main entry point for API requests.
- **api-v2.php**: Updated API handler with enhanced features.
- **app_api.php**: Dedicated API for mobile app interactions.
- **admincp.php**: Central hub for administrative operations.
- **admin_load.php**: Loads essential administrative resources and modules.
- **cron-job.php**: Executes scheduled tasks.
- **expire_pro.php**: Manages the expiration and renewal of premium subscriptions.
- **system_status.php**: Provides real-time status updates.
- **updater.php**: Handles application updates.
```

