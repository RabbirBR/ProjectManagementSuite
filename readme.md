<h1>Project Management Suite</h1>
<p>
	I am building this entire project as an exercise to learn One Page Application (no reloading after logging in).
</p>

<p>
	The system is being built using the <a href="https://laravel.com/">Laravel Framework</a>. As mentioned above, this is a project I'm
	developing to learn one page application using <a href="https://vuejs.org/">Vue.Js</a> along with <strong>Laravel 5.4</strong>.
</p>

<h2>Pre-Requisites</h2>
<p>It is assumed that you have the following installed:</p>
<ul>
	<li><a href="https://getcomposer.org/">Composer</a>.</li>
	<li><a href="https://nodejs.org/">Node.js and NPM</a>.</li>
	<li>Mysql Server. Alternatively you can also install one of the local servers (Eg. XAMMP, WAMP, LAMP, MAMP, etc.).</li>
</ul>

<h2>Instructions for starting the App</h2>
<ol>
	<li>Download from repository or clone, then extract(if you downloaded).</li>
	<li>Open CLI or terminal on the project folder.</li>
	<li>On the terminal run '<b>npm install</b>' and '<b>composer update</b>' in any order to install all PHP and Node dependencies.</li>
	<li>Create a new database for using in this project.</li>
	<li>Copy '<b>.env.example</b>' and rename the new file '<b>.env</b>'.</li>
	<li>Change the DB fields in '.env' according to your needs.</li>
	<li>Run command '<b>php artisan migrate --seed</b>' to migrate and seed database (If you get an error here you probably didn't add the proper details to the fields to the DB fields in .env).</li>
	<li>Run command '<b>php artisan serve</b>'.</li>
</ol>

<h2>Login Information</h2>
<p>The system uses the default authentication provided with Laravel</p>
<h3>Default Credentials</h3>
<p>Some default users are provided to the system. Check the <b>UsersTableSeeder.php</b> file in <b>database->seeds</b> folder.</p>

<h2>Functionalities Currently Finished.</h2>
<ol>
	<li>Authentication - Using Laravel's default Authentication.</li>
	<li>Dashboard.</li>
	<li>Top Navigation Bar.</li>
	<li>Add Projects (Still needs form validation).</li>
	<li>Side Bar - My Projects.</li>
</ol>

<h2>Functionalities still Under Development.</h2>
<ol>
	<li>Load Project details when a project is cliked on from the sidebar.</li>
	<li>Add Tasks to project.</li>
	<li>Generate Gannt Chart using data in the system.</li>
</ol>

<h2>Libraries and Packages Used</h2>
<ul>
	<li>Default PHP and Node Packages provided with Laravel.</li>
	<li><a href="https://jqueryui.com/">jQuery UI</a>.</li>
	<li><a href="https://github.com/jacoborus/nanobar">Nanobar.js</a>.</li>
	<li><a href="http://fontawesome.io/">Font Awesome 4.7.0</a></li>
</ul>