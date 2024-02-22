# Team Members:
1. Sri Naga Venkata Vijay Kumar Pulavarthi
2. Roshan Erukulla
3. Bhushan Shelke

Link for the application: https://in-info-web4.informatics.iupui.edu/~bshelke/lab%202/movie_search.html

## Database Connection Setup:
To establish a connection with the database, update the following credentials in the 'dbconnection.php' file:
```php
$server = "localhost";
$username = "bshelke";
$password = "Goodluck@123456";
$database = "bshelke_db";
```
Include your 'dbconnection.php' file in the same folder as the 'html' and 'php' files.

## Usage Guide:

1. **Filling the fields in the page:**
   - Enter the name of the movie or other details like Release Year, Studio or Name of the director.
   - If you don't know the exact name you can enter first few words to get the similar results in the next page.
   - You will not be able to go to the next page if you don't fill any of the data.

2. **Movie Results:**
   - After submitting, you'll get similar results to your input.
   - The first column of movie name is a link to the final page where you'll get more detailed information of the movie.

3. **Detailed Movie Information:**
   - After clicing on the movie name, you'll land on this page.
   - Here, you will have all details of the movie you wanted to know about such as box-office collections, review scores, etc.


