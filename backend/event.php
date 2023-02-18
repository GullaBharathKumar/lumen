<html>
    <head>
        <title>EVENT MANAGEMENT</title>
        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: cursive;
                
            }
            .alignright{
                float:right;
            }
            ul{
                padding: 0;
                list-style-type: none;
                background-color: #0b121b;
                margin-top: 0;
            }
            ul li{
                display: inline-block;
                position: relative;
                line-height: 20px;
                text-align: left;
                width: 120px;
            }
            ul li ul li{
                border-bottom: 1px solid white;
            }
            ul li a{
                display: block;
                padding: 8px 25px;
                color: white;
                text-decoration: none;
            }
            ul li a:hover{
                color: white;
                background-color: orangered;
            }
            ul li ul.name
            {
                min-width: 100%;
                background-color: rgba(11,18,27,0.8);
                color: white;
                display: none;
                position: absolute;
                z-index: 999;
                left: 0;
            }
            ul li ul li ul.topic
            {
                display: none;
            }
            ul li ul li:hover ul.topic
            {
                display: block;
                left: 100%;
                top: 0%;
                position: absolute;
            }
            ul li:hover ul.name
            {
                display: block;
            }
            ul li ul.name li{
                display: block;
            }
            body{
                background-color:aqua;
            }
            .footer{
                    position: bottom;
                    background-color: blue;
                    color: white;
                    text-align: center;
                    width:100%;
                    height:35px;   /* Height of the footer */
                }
        </style>
    </head>
    <body>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">New Events</a>
            <ul class="name">
              <li><a href="#">Workshops</a>
                <ul class="topic">
                    <li><a href="#">JAVA</a></li>
                    <li><a href="#">Machine Learning</a></li>
                    <li><a href="#">Cyber security</a></li>
                </ul>
            </li></ul>
            <li><a href="#">Latest Events</a></li>
            <li><a href="Registrationn.php">Registration</a></li>
            <li><a href="singin.php">Login</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
        <center><img src="lumen.jpeg" width="50%" height="350px"></center>
        <p>
            Lumen is a multinational technology company that enables companies to capitalize on emerging applications and 
            power the 4th Industrial Revolution (4IR). This revolution is redefining how we live and work, 
            creating an unprecedented need for an advanced application delivery architecture, designed specifically to handle the 
            complex and data-intensive workloads of next-gen technology and businesses. 
        </p>
        <p>We integrate network assets, cloud connectivity, security solutions and voice and collaboration tools 
        into one platform that enables businesses to leverage their data and adopt next-generation technologies.</p>
        <p>
            Lumen brings together the talent, experience, infrastructure and capabilities of CenturyLink, Level 3 
            and 25+ other technology companies to create a new kind of company, one designed specifically to address 
            the dynamic data and application needs of the 4th Industrial Revolution.
        </p>
        <p>
            At Lumen India, we offer secure and reliable services to meet the growing digital demands of businesses and consumers.
             Lumen leverages new age technologies to deliver exceptional customer experience and our employees are constantly 
             pushing boundaries with curiosity, passion, and a collaborative spirit. Lumen’s unifying principles serve as the foundation upon which we continue to grow, conduct our business and guide our interactions with our customers, shareholders, communities and one another. These represent the fundamental values upon which Lumen is built. These principles are: Fairness, Honesty and Integrity, Commitment to excellence, Positive Attitude, Respect, Faith and Perseverance. Lumen welcomes people from all backgrounds driven by the excitement of building technologies, designing new approaches, and providing services that change lives. We thrive on the exchange of ideas among our diverse mix of employees. We are committed to growing our business in a sustainable and socially responsible manner. Giving back to help strengthen and improve our communities is a significant part of who we are. Lumen supports the passions and interests of our employees, 
            and we empower them to be a positive influence in the world.
            
        </p>
        <h3> for More details <a href="https://www.lumen.com/">Visit our website</a></h3><br>
            <div class="footer" ><p> &copy; lumen all rights --reserved </p></div>
    </body>
</html>