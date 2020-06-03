# SimpleWebsiteManagerPhp
A simple cms system written in php which is modular. Any articles/posts you want to add can be added without editing/re adding other web content like navbars,footers etc. 

Note: 

1. This is for people who know html and possibly php who do not want to spend time creating website from scratch. Most of the editing must be done in the php files.
2. If you do not prefer editing anything, then this demo website should function properly without any specific setup/changes.
3. This project was developed in PHP 7.2 and I specifically chose not to use any kind of database - Hence, the features can be limited like no sorting of posts by date etc. I might release a fully dynamic mySQL version later.

How to use:
1. Create a new post from the Admin tools page - password is "password"- can be edited in the admintools.php page. (Session Authentication coming soon). - Use /admintools.php page.
2. You can see all the posts in the code snippets,tutorials or articles page (selected when creating a post).
3. When code snippet,tutorial or article pages are opened, new php links are generated and assigned automatically.
4. All the temporary files start with Zarticle (for easy deletion) and will be in the root folder - They will be generated every time the page is opened.

Current functionalities:
1. Header and Footer has inline css/bootstrap (depending on the version chosen) which can be modified separately while the base article css is in style.css file. Modifying the style.css file properties will effect all the article pages.
2. Responsive design - may not be pretty but will work on most sizes and devices.
3. Quotes(stored in a text file) are loaded and displayed randomly each time on banners.
4. Contact us Page.
5. Search functionality available (Not efficient but works).
6. Admintools page creates posts - currently 3 categories (articles/tutorials/code snippets) - can edit anytime as per the user's requirement.
7. Admin tools page is password protected (default password is 'password'(without quotes)).
8. We can upload and add images,code snippets(textarea) to the created pages.

Upcoming features:
1. Multiple JS slides and scrolls for use- just include the file name in index.php and replace the images.
2. Dynamic retrieval of recent articles and most viewed articles and display on home page(will be a separate module which can be put in any page).
3. Sessions and cookies.
4. Better Search.

Credits:
1. Basic FrontEnd and backend PHP by Chandradhar (https://github.com/chandradhargowtham).
2. Front End Bootstrap by Srinivasa Sameer Addepalli (https://github.com/srinivas-sameer)