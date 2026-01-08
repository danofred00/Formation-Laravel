<!Doctype>
<html>
    <head>
        <title>Contact Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 20px;
            }
            .container {
                max-width: 600px;
                margin: 50px auto;
                background: white;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            h1 {
                text-align: center;
                color: #333;
                margin-bottom: 30px;
            }
            .contact-info {
                margin-top: 20px;
            }
            .contact-item {
                margin-bottom: 25px;
                padding: 15px;
                background-color: #f8f9fa;
                border-radius: 5px;
            }
            .contact-item h3 {
                color: #007bff;
                margin-bottom: 8px;
                font-size: 16px;
            }
            .contact-item p {
                color: #555;
                font-size: 14px;
                line-height: 1.6;
            }
            .contact-item a {
                color: #007bff;
                text-decoration: none;
            }
            .contact-item a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        @include('components.nav')
        
        <div class="container">
            <h1>Contactez-nous</h1>
            
            <div class="contact-info">
                <div class="contact-item">
                    <h3>📧 Email</h3>
                    <p><a href="mailto:{{ $email }}">{{ $email }}</a></p>
                </div>
                
                <div class="contact-item">
                    <h3>📱 Téléphone</h3>
                    <p><a href="tel:{{ $tel }}">{{ $tel }}</a></p>
                </div>
                
                <div class="contact-item">
                    <h3>📍 Adresse</h3>
                    <p>{{ $address }}</p>
                </div>
            </div>
        </div>
    </body>
</html>