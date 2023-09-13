# cs008-web-design-final

![Website Screenshot](/images/website-screenshot.png)

## Description

This website provides information about music, focusing on the guitar. It covers the history of the guitar, different types of guitars, and features sections on famous bands like Led Zeppelin, Foo Fighters, and Fleetwood Mac. Users can also fill out a survey to share their favorite music genres and instrument preferences. Please note you will recieve an email based on your responses.

## Files and Directories

- `index.html`: Main page of the CS 008 Fall 2022 website. It provides a site map to assignments and labs.

### Main Final Project Files
- `/final/index.php`: The main page of the website featuring sections on Led Zeppelin, Foo Fighters, and Fleetwood Mac.
- `detail.php`: This page provides a detailed history of the guitar, including images for comparison.
- `form.php`: Presents a form for users to input their contact information, favorite genres, and instrument preference.
- `array.php`: Displays information about different chords. Features various sections for different chord types, each with an image and an associated MP3 file for audio playback.

### External Connections
- `connect-DB.php`: Handles the database connection for the website. Uses PHP Data Objects to connect to a MySQL database hosted at webdb.uvm.edu.
- `credentials.php`: Stores the MySQL database password as plain text (not secure, just for demonstration/practice purposes).

### Patterns
- `header.php`: Contains the header section for the website.
- `footer.php`: Contains the footer section with site map links and credits.
- `nav.php`: Navigation bar for easy navigation between pages.
- `sql.php`: Provides SQL code for creating and populating tables related to the website's content.
- `top.php`: Contains the header, opening HTML tags, and links to CSS files.


## Usage

1. Clone or download the repository.
2. Set up a local server environment (e.g., XAMPP, WAMP).
3. Place the files in the root directory of your local server.
4. Import the provided SQL file to set up the database.
5. Access the website by navigating to `http://localhost/final/index.php` in your web browser.

## Requirements

- PHP
- MySQL Database
- Web server environment (e.g., Apache)

## Additional Notes

- Ensure that your server environment supports PHP for proper functionality.
- For detailed information on each section, refer to the comments within the PHP files.

## Contributors

- Nolan Cyr
- Matthiew Swaim


## Contact

For any inquiries or issues, please contact [Nolan Cyr](mailto:nolangcyr@gmail.com) or [Matt Swaim](mailto:matthew.swaim@uvm.edu>).
