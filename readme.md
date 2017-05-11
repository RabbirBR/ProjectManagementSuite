<h1>Project Management Suite</h1>
<p>
	Meant as an excersize to learn One Page Application (no reloading after logging in).
</p>
<p>
	The system is built using the <a href="">Laravel Framework</a>. As mentioned above this is a project I'm
	developing to learn one page application using Vue.Js along with Laravel.
</p>

<h2>Pre-Requisites</h2>
<p>It is assumed that you have the following installed:</p>
<ul>
	<li><a href="https://getcomposer.org/">Composer</a>.</li>
	<li><a href="https://nodejs.org/">Node.js and npm</a>.</li>
</ul>

<h2>Instructions for starting the App</h2>
<ol>
	<li>Download from repository or clone, then extract(if you downloaded).</li>
	<li>Open CLI or terminal on the project folder.</li>
	<li>On the terminal run '<b>npm install</b>' and '<b>composer update</b>' in any order to install all dependencies.</li>
	<li>Create new database named '<b>project_suite</b>'.</li>
	<li>Run command '<b>php artisan migrate --seed</b>' to migrate and seed database.</li>
	<li>Run command '<b>php artisan serve</b>'.</li>
</ol>

<h2>Login Information</h2>
<p>The system uses the default authentication provided with Laravel</p>
<h3>Default Credentials Provided:</h3>
<table width="100%" border="1px solid black">
	<thead>
		<tr>
			<th>E-mail</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>user1@test.com</td>
			<td>secret</td>
		</tr>
		<tr>
			<td>user2@test.com</td>
			<td>secret</td>
		</tr>
		<tr>
			<td>user3@test.com</td>
			<td>secret</td>
		</tr>
		<tr>
			<td>user4@test.com</td>
			<td>secret</td>
		</tr>
	</tbody>
</table>