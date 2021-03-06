<!DOCTYPE html>
<html>
  <style></style>
  <head>
    <title>At Laura's</title>
    <link rel="stylesheet" type="text/css" href="css/resources/style.css"/>
    <link
      href="https://fonts.googleapis.com/css?family=Boogaloo|Indie+Flower"
      rel="stylesheet"/>
    <script
      type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"/>

    <script>
      $(document).on("scroll", function() {
        if ($(document).scrollTop() > 100) {
          $("header").addClass("shrink");
        } else {
          $("header").removeClass("shrink");
        }
      });
    </script>
  </head>

  <body>
    <header>
      <div class="nav-bar">
        <nav class="nav-left">
          <span><a href="#home">Home</a></span>
          <span><a href="#menu">Menu</a></span>
          <span><a href="#event">Event</a></span>
        </nav>
        <nav class="nav-right">
          <span><a href="#catering">Catering</a></span>
          <span><a href="#location">Location</a></span>
          <span><a href="#contact">Contact</a></span>
        </nav>
      </div>
    </header>

    <div class="main-content">
      <div id="home" class="welcome-box">
        <div class="welcome-content">
          <h1>Welcome!</h1>
          <span>Various, Excellent and Traditonal Chinese Dishes</span>
          <span>Brings You Back to China</span>
          <h1>At Laura's Kitchen</h1>
        </div>
      </div>

      <div id="menu" class="menu-box">
        <h3 class="nav-line">MENU</h3>
        <div class="food-menu">
          <!-- upper box -->
          <div class="upper-box">
            <div class="food-pic edamame">
              <h4 class="box">Spiced Edamame</h4>
            </div>

            <div class="food-pic cucumber">
              <h4 class="box">Shredded Cucumber with Sauce</h4>
            </div>

            <div class="food-pic toufu">
              <h4 class="box">Seasoning Toufu with Green Onion</h4>
            </div>
          </div>
         
              
            </div>
        </div>

             <!-- lower box -->
            <div class="lower-box">
                <div class="left-box">
                    <div class="food-pic tomatoes-eggs">
                    <h4 class="box">Srambled Eggs with Tomatoes</h4>
                </div>

                    <div class="food-pic chicken-mushroom">
                    <h4 class="box">Fried Chicken with Shiitake Mushroom</h4>
                </div>

                    <div class="food-pic cola-wings">
                    <h4 class="box">Cola Chicken Wings</h4>
                </div>
                </div>

                <div class="middle-box">
                    <div class="food-pic event-name">
                        <h4 class="box box-1">Spring Festival Dinner Menu</h4>
                    </div>
              
                    <div class="food-pic oxtail-soup">
                        <h4 class="box">Oxtail Soup</h4>
                    </div>
              
                    <div class="food-pic fried-rice">
                        <h4 class="box">Fried Rice with Eggs</h4>
                    </div>
                </div>
              
                <div class="right-box">
                    <div class="food-pic potato-slices">
                        <h4 class="box">Sweet Sour Potato Slices</h4>
                    </div>
        
                    <div class="food-pic ants-tree">
                        <h4 class="box">Ants Climb the Tree</h4>
                    </div>
        
                    <div class="food-pic cumin-beef">
                        <h4 class="box">Cumin Flavored Beef</h4>
                    </div>
                </div> 
           </div>

        <div id="event" class="event-box">
          <h3 class="nav-line">EVENT</h3>
          <div class="info">
            <img
              class="pig"
              src="https://www.awarenessdays.com/wp-content/uploads/2017/08/iStock-980223058-1024x768.jpg"
              alt="the year of big picture"/>
            <div class="pig-info">
              <h2 class="year-name">The Year Of Pig</h2>
              <p class="year-description">
                2019 is the Year of the Pig according to Chinese zodiac. This is
                a Year of Earth Pig, starting from Feb. 5, 2019 (Chinese New
                Year) and lasting to Jan. 24, 2020. <br />Pig is the twelfth in
                the 12-year cycle of Chinese zodiac sign.<br />Pig is not
                thought to be a smart animal in China. It likes sleeping and
                eating and becomes fat. Thus it usually features laziness and
                clumsiness. On the positive side, it behaves itself, has no plan
                to harm others, and can bring affluence to people. Consequently,
                it has been regarded as wealth.
              </p>
            </div>
          </div>
        </div>

        <div id="catering">
          <h3 class="nav-line">Catering</h3>
          <div class="catering">
            <img
              src="https://scontent.farn2-1.fna.fbcdn.net/v/t1.0-9/50669936_2253129401609954_8892892140426756096_n.jpg?_nc_cat=106&_nc_ht=scontent.farn2-1.fna&oh=0a3b25a524fec992c5bad990f0c292a2&oe=5CFF0F7A"
              alt="catering box"/>
            <div class="catering-info">
              <h4>We do within 10 people group catering!</h4>
              <h4><i class="fa fa-calendar"></i> Schedule it 2 weeks ahead</h4>
            </div>
          </div>
        </div>

        <div id="location">
          <h3 class="nav-line">Location</h3>
          <div class="location">
            <img
              src="https://scontent.farn2-1.fna.fbcdn.net/v/t1.0-9/50681656_2253147074941520_8001573159629225984_n.jpg?_nc_cat=106&_nc_ht=scontent.farn2-1.fna&oh=3b93b3b8ff598b02b45dc7d1262fb355&oe=5CBF6BF8"
              alt="location picture"/>
            <div class="location-info">
              <h4><i class="fas fa-location-arrow"></i> St.xx 27, Stockholm, Sweden</h4>
            </div>
          </div>
        </div>
      </div>

      <div id="contact">
        <h3 class="nav-line">CONTACT</h3>
        <div class="contact-box">
          <img
            src="https://scontent.farn2-1.fna.fbcdn.net/v/t1.0-9/50996699_2253067294949498_1435386385379885056_n.jpg?_nc_cat=101&_nc_ht=scontent.farn2-1.fna&oh=09e3790b8decae9801fc5ec9d15a4743&oe=5CFD1A86"
            alt="contact card"/>
          <div class="contact-info">
            <h4>At Laura's</h4>
            <h4>&#9742;: 555-555-5555</h5>
            <h4><i class="fas fa-envelope"></i> atlauras@kitchen.com</h5>
          </div>
        </div>
      </div>

    <footer>&copy;At Laura's Kitchen 2019</footer>
  </body>
</html>
