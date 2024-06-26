
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Théo VERGER | Développeur Web</title>
    <link rel="stylesheet" type="text/css" href="/css/contact.css">
</head>
<body>
    <main>
        <div class="nav-container">
            <a href="/html/home.html">
                <div class="icon-home">
                    <img src="/imgs/www.png" alt="Logo du site (redirection sur l'accueil)">
                </div>
            </a>
            <nav>
                <ul>
                    <li><a href="/html/home.html">Accueil</a></li>
                    <li><a href="/html/about.html">A propos</a></li>
                    <li><a href="/html/divers.html">Divers</a></li>
                    <li><a href="/html/contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="right">
                <a href="/html/contact.html">
                    <div class="icon-contact">
                        <img src="/imgs/e-mail.png" alt="Icon d'enveloppe (redirection sur la page de contact)">
                    </div>
                </a>
                <div class="hamburger-menu">
                    <label class="hamburger-menu">
                        <input type="checkbox">
                    </label>
                    <div class="menu">
                        <ul>
                            <li><a href="/html/home.html">Accueil</a></li>
                            <li><a href="/html/about.html">A propos</a></li>
                            <li><a href="/html/divers.html">Services</a></li>
                            <li><a href="/html/contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['name'];
            $email = $_POST['mail'];
            $numberPhone = $_POST['numberPhone'];
            $object = $_POST['objet'];
            $message = $_POST['message'];

            $to = 'theo.verger3@gmail.com';
            $subject = $object;
            $message = "Nom: $name\nEmail: $email\nTéléphone: $numberPhone\nMessage: $message";
            $headers = 'From: ' . $email;

            mail($to, $subject, $message, $headers);

            header('Location : /php/index.php');
            
            exit;
        }
        ?>
        <section class="contact">
			<div>
				<h1>Me <span class="green">contacter</span></h1>
				<p>Si vous avez besoin d'autres services, n'hésitez<br>pas à me contacter.</p>
				<div class="contact-container">
					<div>
						<a href="mailto:theo.verger3@gmail.com"><img src="/imgs/enveloppe.png" alt="Illustration d'une enveloppe"> theo.verger3@gmail.com</a>
					</div>
				</div>
			</div>
            
			<form class="form-contact" method="POST" action="/php/index.php">
				<div class="container">
					<div class="small-container">
						<label for="name">Nom</label>
						<div class="input-container">
							<div>
								<img src="/imgs/icon-1-contact.svg" alt="Icon d'une silhouette">
							</div>
							<input type="text" id="name" name="name" placeholder="Nom" maxlength="255" required>
						</div>
					</div>
					<div class="small-container">
						<label for="mail">Email</label>
						<div class="input-container">
							<div>
								<img src="/imgs/icon-2-contact.svg" alt="Icon d'une enveloppe">
							</div>
							<input type="email" id="mail" name="mail" placeholder="email@gmail.com" maxlength="255" required>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="small-container">
						<label for="numberPhone">Téléphone</label>
						<div class="input-container">
							<div>
								<img src="/imgs/icon-3-contact.svg" alt="Icon d'un Téléphone">
							</div>
							<input type="tel" id="numberPhone" name="numberPhone" placeholder="06 00 00 00 00" maxlength="15">
						</div>
					</div>
					<div class="small-container">
						<label for="objet">Objet</label>
						<div class="input-container">
							<input type="text" id="objet" name="objet" maxlength="255" required>
						</div>
					</div class="small-container">
				</div>
				<div class="container">
					<div class="small-container">
						<label for="message">Messsage</label>
						
						<textarea id="message" name="message" placeholder="Merci d'écrire votre message" required></textarea>
					</div>
				</div>
				<div class="container">
					<div class="small-container">
						<div class="button-container">
							<input type="submit" class="button-black" name="submit" value="Envoyer">
						</div>
					</div>
				</div>
			</form>
		</section>
	</main>
	
    <div class="bk_black">
        <main>
            <footer>
                <div class="foot-container">
                    <div>
                        <h2>Théo VERGER</h2>
                    </div>
                    <div>
                        <h2>Pages</h2>
                        <ul>
                            <li><a href="/html/home.html">Accueil</a></li>
                            <li><a href="/html/about.html">A propos</a></li>
                            <li><a href="/html/divers.html">Divers</a>
                            <li><a href="/html/contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-contact">
                        <h2>Me contacter</h2>
                        <div>
							<div>
                                <img src="/imgs/enveloppe.png" alt="Illustration d'une enveloppe">
                            </div>
                            <a href="mailto:theo.verger3@gmail.com">theo.verger3@gmail.com</a>
						</div>
                        <div>
                            <a href="https://www.linkedin.com/in/th%C3%A9o-verger/" rel="noopener" target="_blanck"><div><img src="/imgs/linkedin.png" alt="Illustration du logo de linkedin"></div>
                            Théo VERGER</a>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    Copyright © Théo VERGER | Designed by BRIX - <a href=""><nobr>Mentions légales</nobr></a>
                </div>
            </footer>
        </main>
    </div>
</body>
</html>