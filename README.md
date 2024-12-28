
HTML to PDF Generator Plugin
============================

Description:
-------------
The HTML to PDF Generator plugin is a lightweight WordPress plugin that allows you to convert WordPress pages or posts into PDF files. Users can generate PDFs either by using a shortcode or directly via an admin interface.

Version:
---------
1.1.0

Author:
--------
Team Six

Features:
----------
1. Generate a PDF of any WordPress page or post.
2. Create a "Download PDF" button using a shortcode [pdf_six].
3. Admin interface to manually generate PDFs by providing a URL.
4. Automatically fetches and sanitizes HTML content.
5. Uses mPDF library for efficient PDF generation.

Installation:
--------------
1. Download the plugin and place the files in the WordPress plugins directory (`wp-content/plugins/html-to-pdf-generator`).
2. Activate the plugin from the WordPress admin dashboard.

Usage:
-------
1. **Shortcode Usage**: Add `[pdf_six]` to any page or post to display a "Download PDF" button.
2. **Admin Interface**:
   - Go to **HTML to PDF** in the WordPress admin menu.
   - Enter a URL and click **Generate PDF** to download the corresponding PDF.

File Structure:
----------------
- `html-to-pdf-generator.php`: Main plugin file.
- `includes/short-code.php`: Handles the shortcode logic.
- `includes/pdf-generator.php`: Contains the PDF generation logic using mPDF.
- `includes/admin-menu.php`: Adds the admin menu and its functionality.
- `vendor`: Contains mPDF library and dependencies.
- `tmp`: Temporary directory for PDF processing.

Requirements:
--------------
1. PHP version 7.4 or higher.
2. WordPress version 5.5 or higher.
3. mPDF library is included within the plugin.

Changelog:
-----------
**Version 1.1.0**
- Added admin menu for manual PDF generation.
- Enhanced HTML sanitization with the Tidy extension.
- Improved shortcode styling and functionality.
- Optimized PDF generation with error handling.

Support:
---------
For any issues or feature requests, visit [https://example.com](https://example.com).

License:
---------
This plugin is open-source and licensed under the GPLv2 license.

Warning: 
---------
(POST Content-Length of 51543783 bytes exceeds the limit of 41943040 bytes in Unknown on line 0
The link you followed has expired.)

Warning Reason: 
---------------
this warning appears when you attempt to upload a ZIP file (e.g., a plugin) to your website, and the file size exceeds the maximum upload limits configured on the server.

Warning Solution: 
-----------------
extract the zip and copy and paste the plugin into the WordPress plugin folder. OR edit your **php.ini** file and set the size like that 
_**upload_max_filesize = 150M
post_max_size = 128M
max_execution_time = 300
max_input_time = 300
memory_limit = 256M**_
