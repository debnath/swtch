#Switch Media

Live example can be viewed here: http://ec2-52-25-86-49.us-west-2.compute.amazonaws.com/index.html
* By default you will see names sorted by user id
* Use the dropdown on the top left to change the sorting between First name, last name, email, role and department.
* The search box at the top right will let you search for key words.  Not incomplete words however.  Some examples are names: "Williamson" "Angelica"
* Pagination is indicated at the bottom left.  Each page represents 10 results. As there are 26 results, there are 3 pages.  This is automatically calculated.
* If you click any of the rows, an overlay will appear showing more information about that specific user.
* All of the above queries are done by AJAX calls to a REST API that sits ontop of the MySQL DB

# Example API calls:
Get Single User: /switchservice/v1/user/4
http://ec2-52-25-86-49.us-west-2.compute.amazonaws.com/switchservice/v1/user/4

Paginate through multiple users: /switchservice/v1/user/?offset=&orderby=
http://ec2-52-25-86-49.us-west-2.compute.amazonaws.com/switchservice/v1/users?offset=0&orderby=last_name

Keyword search:
http://ec2-52-25-86-49.us-west-2.compute.amazonaws.com/switchservice/v1/wordsearch?keyword=williamson

File structure
* The 'conf' directory has the apache configuration used to route requests
* The 'scripts' directory contain useful scripts for doing things like populating and altering the MySQL DB, pushing to production and local setup.
* The src/dao directory contains the DB models
* src/*.php contains controller logic
* src/fe contains all the frontend logic