<style>
body,
html {
  padding: 0;
  margin: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background-color: #fff;
  font-family: 'Montserrat', sans-serif;
  color: #fff
}

html {
  background: url('https://static.pexels.com/photos/818/sea-sunny-beach-holiday.jpg');
  background-size: cover;
  background-position: bottom
}

.error {
  text-align: center;
  padding: 16px;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%)
}

h1 {
  margin: -10px 0 -30px;
  font-size: calc(17vw + 40px);
  opacity: .8;
  letter-spacing: -17px;
	color:#F1935D ;
}

p {
  opacity: .8;
  font-size: 20px;
  margin: 8px 0 38px 0;
  font-weight: bold;
	opacity: 1;
	  color:#F6C94D ;
}

input,
button,
input:focus,
button:focus {
  border: 0;
  outline: 0!important;
}

input {
  width: 300px;
  padding: 14px;
  max-width: calc(100% - 80px);
  border-radius: 6px 0 0 6px;
  font-weight: 400;
  font-family: 'Montserrat', sans-serif;
}

.fa-arrow-left {
  position: fixed;
  top: 30px;
  left: 30px;
  font-size: 2em;
  color:white;
  text-decoration:none
}
.btn {
  padding: 12px 24px;
  border: none;
  background: #85D6A5 ;
  color: white;
  cursor: pointer;
  opacity:1;
}
.btn:hover {
  opacity:1;
}

</style>
<a href="{{url('/dashboard')}}" class="fa fa-arrow-left"></a>
<div class="error">
  <h1>500</h1>
  <p>We’re working to fix it. Please try again later.</p>
	<a href="{{url('/dashboard')}}" ><button class="btn">Go Back</button></a>
</div>