

<style>

@import url(https://fonts.googleapis.com/css?family=Lato:400,600,700);
.snip1527 {
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  color: #ffffff;
  float: left;
  font-family: 'Lato', Arial, sans-serif;
  font-size: 16px;
  margin: 10px 1%;
  max-width: 310px;
  min-width: 250px;
  overflow: hidden;
  position: relative;
  text-align: left;
  width: 100%;
}

.snip1527 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

.snip1527 img {
  max-width: 100%;
  vertical-align: top;
  position: relative;
}

.snip1527 figcaption {
  padding: 25px 20px 25px;
  position: absolute;
  bottom: 0;
  z-index: 1;
}

.snip1527 figcaption:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: #700877;
  content: '';
  background: -moz-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
  background: -webkit-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
  background: linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
  opacity: 0.8;
  z-index: -1;
}

.snip1527 .date {
  background-color: #fff;
  border-radius: 50%;
  color: #700877;
  font-size: 18px;
  font-weight: 700;
  min-height: 48px;
  min-width: 48px;
  padding: 10px 0;
  position: absolute;
  right: 15px;
  text-align: center;
  text-transform: uppercase;
  top: -25px;
}

.snip1527 .date span {
  display: block;
  line-height: 14px;
}

.snip1527 .date .month {
  font-size: 11px;
}

.snip1527 h3,
.snip1527 p {
  margin: 0;
  padding: 0;
}

.snip1527 h3 {
  display: inline-block;
  font-weight: 700;
  letter-spacing: -0.4px;
  margin-bottom: 5px;
}

.snip1527 p {
  font-size: 0.8em;
  line-height: 1.6em;
  margin-bottom: 0px;
}

.snip1527 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}

.snip1527:hover img,
.snip1527.hover img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}


/* Demo purposes only */

body {
  background-color: #212121;
}
</style>

<figure class="snip1527">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample23.jpg" alt="pr-sample23" /></div>
  <figcaption>
    <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
    <h3>The World Ended Yesterday</h3>
    <p>

      You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you don't have an attitude.
    </p>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1527 hover">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample24.jpg" alt="pr-sample24" /></div>
  <figcaption>
    <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
    <h3>An Abstract Post Heading</h3>
    <p>

      Sometimes the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.
    </p>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1527">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample25.jpg" alt="pr-sample25" /></div>
  <figcaption>
    <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
    <h3>Down with this sort of thing</h3>
    <p>

      I don't need to compromise my principles, because they don't have the slightest bearing on what happens to me anyway.
    </p>
  </figcaption>
  <a href="#"></a>
</figure>

<script>

$(".hover").mouseleave(
  function() {
    $(this).removeClass("hover");
  }
);
</script>