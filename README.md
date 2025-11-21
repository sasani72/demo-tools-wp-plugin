# Demo Tools – WordPress Utility Plugin

A lightweight WordPress plugin demonstrating modern, class-based architecture with an admin page, custom REST API endpoint, and a frontend shortcode.  
---

## Features

- Adds a custom **admin tools page** under **Tools → Demo Tools**
- Registers a custom **REST API endpoint** for simple diagnostics
- Includes a frontend **shortcode** for displaying data
- Clean separation of responsibilities:
  - Admin UI
  - REST routes
  - Shortcodes
---

## File Structure

```
demo-tools/
│
├── demo-tools.php # Main plugin bootstrap
└── src/
├── AdminPage.php # Admin menu + tools page
├── RestApi.php # Custom REST API route
└── Shortcodes.php # Frontend shortcode handler
```


## Installation

1. Copy the plugin folder into:

``wp-content/plugins/demo-tools/``

2. Activate **Demo Tools** from:  
   **WordPress Admin → Plugins**

3. Access the admin page:  
   **Tools → Demo Tools**

4. REST API is available at something like:  
   ``/wp-json/api/v1/ping``

5. Use the shortcode in any page or post:

---

## Example Use Cases

- Internal developer tools  
- Quick health checks  
- Sample REST API integration  
- Demonstrating WP plugin architecture  
- Marketing/debug utilities  
- Lightweight testing endpoint for frontend teams  

---

## Author

**Sasani**  
Backend Developer – PHP

