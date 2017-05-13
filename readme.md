<h1>Project Management Suite</h1>
<h2>Introduction</h2>
<p>
	This is a simple One-page Application using <a href="https://vuejs.org/">Vue.Js</a> along with <a href="https://laravel.com/">Laravel 5.4</a>. This is a learning project I'm developing alone to build up my portfolio as a Web/Laravel Developer. I welcome any criticism to the system, since it will help me improve.
</p>
<p>
	The system will allow a user to:
	<ul>
		<li>Register and Login to the system.</li>
		<li>Create Project.</li>
		<li>Add tasks to each Project and assign a time (in hours) to each tasks.</li>
		<li>See a <b>Gannt Chart</b>, which the system will generate from the data the user provides.</li>
	</ul>
</p>

<h2>Pre-Requisites</h2>
<p>It is assumed that you have the following installed:</p>
<ul>
	<li><a href="https://getcomposer.org/">Composer</a>.</li>
	<li><a href="https://nodejs.org/">Node.js and NPM</a>.</li>
	<li>Mysql Server. Alternatively you can also install one of the local servers (Eg. XAMMP, WAMP, LAMP, MAMP, etc.).</li>
</ul>

<h2>Instructions for starting the Application</h2>
<ol>
	<li>Download from repository or clone.</li>
	<li>Open CLI or terminal on the project folder.</li>
	<li>On the terminal run '<b>npm install</b>' and '<b>composer update</b>' in any order (or together, it doesn't matter) to install all PHP and Node dependencies.</li>
	<li>After 'npm install' command has finished, run the command 'npm run dev' or 'npm run watch' to compile the Vue components.</li>
	<li>Create a new MySql database to use in this project.</li>
	<li>Copy '<b>.env.example</b>' and rename the new file '<b>.env</b>'.</li>
	<li>Change the DB fields in '.env' according to your MySql Server Configuration.</li>
	<li>Run command '<b>php artisan migrate --seed</b>' to migrate and seed database (If you get an error here you probably didn't add the proper details to the fields to the DB fields in .env).</li>
	<li>Run command '<b>php artisan serve</b>', copy the development server address given to you(by default its localhost:8000 or 127.0.0.1:8000).</li>
	<li>Go to your prefered browser and paste to start trying out the Application.</li>
</ol>

<h2>Example Data Provided.</h2>
<ul>
	<li>Some default users are provided with the system. Check the <b>UsersTableSeeder.php</b> file in <b>database->seeds</b> folder.</li>
</ul>
<p>
	In later Versions of the development process, some default Projects and relevant data will be provided with the system as an example, after the respective functionalities have been completed.
</p>

<h2>Functionalities Currently Finished.</h2>
<ul>
	<li>Authentication - Using Laravel's default Authentication.</li>
	<li>Dashboard.</li>
	<li>Top Navigation Bar.</li>
	<li>Add Projects (Still needs Form Validation).</li>
	<li>Side Bar - My Projects.</li>
</ul>

<h2>Functionalities still Under Development.</h2>
<ul>
	<li>Load Project details when a project is clicked on from the sidebar.</li>
	<li>Add Tasks to project.</li>
	<li>Generate Gannt Chart using data in the system.</li>
</ul>

<h2>Libraries and Packages Used</h2>
<ul>
	<li>Default PHP and Node Packages provided with Laravel.</li>
	<li><a href="https://jqueryui.com/">jQuery UI</a> - As of now, only using the jQueryUI Datepicker.</li>
	<li><a href="https://github.com/jacoborus/nanobar">Nanobar.js</a> - The loading bar on the top of the page.</li>
	<li><a href="https://github.com/wavded/humane-js">Humane.js</a> - Notification popups on the top of the page to the user.</li>
	<li><a href="https://github.com/noraesae/perfect-scrollbar">Perfect Scrollbar</a> - For customized scrollbars.</li>
	<li><a href="http://fontawesome.io/">Font Awesome 4.7.0</a> - because, Awesome icons.</li>
</ul>

<h2>Credits</h2>
<p>
	I will add names, along with link to the github accounts, of people who criticised and help build this system in any way in this section.
</p>