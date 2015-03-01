<!DOCTYPE html>

<!--
  Google HTML5 slide template

  Authors: Luke Mahé (code)
           Marcin Wichary (code and design)
           
           Dominic Mazzoni (browser compatibility)
           Charles Chen (ChromeVox support)

  URL: http://code.google.com/p/html5slides/
-->

<html>
  <head>
    <title>Presentation</title>

    <meta charset='utf-8'>
    <script
      src='http://html5slides.googlecode.com/svn/trunk/slides.js'></script>
  </head>
  
  <style>
    /* Your individual styles here, or just use inline styles if that’s
       what you want. */
div#test{
    position: absolute;
    top: 200px;
    float: left;
    width: 400px;
    text-align: right;
}
div#test2{
    position: absolute;
    top: 270px;
    float: left;
    width: 400px;
    text-align: right;
}
div#test3{
    position: absolute;
    top: 200px;
    float: left;
    width: 400px;
    text-align: right;
}
div#test4{
    position: absolute;
    top: 10px;
    float: right;
    width: 600px;
    text-align: left;
}
div#test5{
    position: absolute;
    top: 10px;
    float: right;
    width: 800px;
    text-align: right;
}
    
  </style>

  <body style='display: none'>

    <section class='slides layout-regular template-default'>
      
      <!-- Your slides (<article>s) go here. Delete or comment out the
           slides below. -->
      
      <article class='biglogo'>
          <div id = "test">
              A special thanks to...
          </div>
      </article>
      <article>
          <h2>Transforming community through data</h2>
      </article>
      <article>
          <div id = "test2">
              ARC: Janae Futrell
              <p>
              GHacks: Daniel, David, Derrick,
              Diana, Ebony, Elan Emmanuel
              Ilya, Jason, Jimmy, Julie
              </p>
              <p>
              Mentor: Chidi, Haider
              Winter 2015 Goodie Hackathon
              </p>
          </div>
          <div id = "test4">
              <img src = "logo-line.png"/>
          </div>
          <div id = "test5">
          </div>

      </article>

      <article>
          <h2>The Challenge</h2>
          <p>
          Ability to diagnose problems for stakeholders in providing services to underserved communities
          </p>
      </article>

      <article>
          <h3 height=400>The Problem</h3>
          <ul>
              <li>The Goal</li>
              <ul>
                  <li>How is the entire system performing</li>
                  <li>Understanding of demand side flows</li>
                  <li>Automate redundant tasks</li>
              </ul>
          </ul>

      </article>

      <article>
          <h3>Solution</h3>
          <ul>
              <li>Web based system that allows data import from providers</li>
              <li>Generates automatic high quality data visualizations</li>
              <li>Provides actionable insights</li>
          </ul>
      </article>

      <article>
          <h3>Customer Feedback</h3>
          "I love it! It's the perfect tool to diagnose my data issues and is exactly what I need!"
          <br>
          -Janae Futrell
      </article>

      <article>
          <h3><a href="https://still-eyrie-9092.herokuapp.com/">The Dashboard</a></h3>
      </article>

    </section>

  </body>
</html>
