# My first project in PHP/MySQL, Using Greek Mythology

Installation :
-- Feel free to clone this repository
-- Make an .env file for yourself, and use the .env.example as an example
-- Run composer init in your terminal
-- Run npm install

-- Set up a DB to connect to, make sure its name is the same as in your .env file
-- To get the content for your DB Run: php migrate.php -f -s
-- Have a wonderful day :-)

__________________________________________________________________________________

Recently added (top = newest):

Show God Page (or God Detail Page) now works according to plan, Styling will be added shortly.

'deleted' and 'deleted_by' fields have now been re-added to the gods migration page, as 'deleted' field was required to be NOT NULL in other areas of code.

Added new routes, to specific Gods their pages. ID's are now correct, yet content can not be reached yet.

Changes to AllGodsPage, all animations now have the same timings on hover, and will 'fade-out' after animation is done as well. Added some shadows ontop of the header as user enters the page, to make it appear the content is all on the same 'height' or 'layer'.

Added small functionality, several buttons, new styling included as 'btn-mau'.

Header updated slightly, same with Register/Login pages. Additional Styling is needed, but it is acceptable for now.

New Folder added to images, called 'cards', it will hold pictures for the GoDCards. Routing works.

Added a first layer of styling to the AllGodsPage cards.

AllGodsModel is now added to the Register Page, so future-users can select a God to follow directly from the DB, rather than 4 placeholders. On the register view page there is once again a foreach loop which displays said Gods.

In the AllGodsPage a foreach loop now loops over all the 'gods' and displays cards with the correct Data.

Added AllGodsController, it can now collect info from the 'gods' table in the database.

Added AllGodsModel, it extends Model.

Changes to Personal Page, now correctly shows which God the user follows.

Small Changes to Personal Page (ME), can now see own username as you're logged in.

Animations done, all of the content non-responsive so far. It does however, look alright for now.

AllGods Page Header + text added, first placeholder design finished.

AllGods page added.

Button added on front-page, now links directly to 'Register', might be changed at a later stage.

Front-page small design changes, closer towards its final look. Background image added, with additional effects. 

First Seeders added, 'gods' file added with info about Greek Gods.

DB was created, Test Seeders are up and running.
