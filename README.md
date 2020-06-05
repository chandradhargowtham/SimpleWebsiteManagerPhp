# SimpleWebsiteManagerPhp
A simple cms system written in php which is modular. Any articles/posts you want to add can be added without editing/re adding other web content like navbars,footers etc. 

Note: 

1. This is for people who know html and possibly php who do not want to spend time creating website from scratch. Most of the editing must be done in the php files.
2. If you do not prefer editing anything, then this demo website should function properly without any specific setup/changes.
3. This project was developed in PHP 7.2 and I specifically chose not to use any kind of database - Hence, the features can be limited like no sorting of posts by date etc. I might release a fully dynamic mySQL version later.

How to use:
1. Create a new post from the Admin tools page - login - "chan" and "pwd".
2. You can see all the posts in the code snippets,tutorials or articles page (selected when creating a post).
3. When code snippet,tutorial or article pages are opened, new php links are generated and assigned automatically.
4. All the temporary files start with Zarticle (for easy deletion) and will be in the root folder - They will be generated every time the page is opened.

Current functionalities:
1. Header and Footer has inline css/bootstrap (depending on the version chosen) which can be modified separately while the base article css is in style.css file. Modifying the style.css file properties will effect all the article pages.
2. Responsive design - Should work on most sizes and devices.
3. Quotes(stored in a text file) are loaded and displayed randomly each time on banners.
4. Contact us Page.
5. Search functionality available (searches page titles in all postable folders)(Not efficient but works).
6. Admintools page creates posts - currently 3 categories (articles/tutorials/code snippets) - can edit anytime as per the user's requirement.
7. We can upload and add images,code snippets(textarea) to the created pages.
8. Sessions and Authentication.
9. Color Codes for Article Type (php,unity etc).
10.Image upload has a 2MB limit (can be changed in image.php) and can only upload jpg,png and gif files(can also be changed).

Upcoming features:
1. Better Search.
2. Proper login system (only file system and no db in mind) with password reset.

Credits:
1. Basic FrontEnd HTML/CSS and backend PHP by Chandradhar (https://github.com/chandradhargowtham).
2. Front End HTML/Bootstrap by Srinivasa Sameer Addepalli (https://github.com/srinivas-sameer)