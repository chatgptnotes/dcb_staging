@include('layouts.header')


<section class="container section-margin-top section-margin-bottom">
<h3 class="section-title text-purple">Our Marketplace</h3>
    <div class="row">
        <div class="col-md-6">
        <p class="section-description mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla molestie arcu eu finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce aliquam rutrum tortor non vehicula. Etiam tristique est nulla, id tincidunt nisi ullamcorper et. Aliquam efficitur vulputate nunc vel finibus.</p>
        <p class="section-description mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla molestie arcu eu finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce aliquam rutrum tortor non vehicula. Etiam tristique est nulla, id tincidunt nisi ullamcorper et. Aliquam efficitur vulputate nunc vel finibus.</p>
        <p class="section-description mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla molestie arcu eu finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce aliquam rutrum tortor non vehicula. Etiam tristique est nulla, id tincidunt nisi ullamcorper et. Aliquam efficitur vulputate nunc vel finibus.</p>
        <p class="section-description mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla molestie arcu eu finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce aliquam rutrum tortor non vehicula. Etiam tristique est nulla, id tincidunt nisi ullamcorper et. Aliquam efficitur vulputate nunc vel finibus.</p>

            
        </div>
        <div class="col-md-6">
        <img src="{{ asset('assets/images/2019marketplace.PNG') }}" class="w-100 h-100"  >
        </div>
  </div>
</section>

<section class="container section-margin-top section-margin-bottom"  style="margin-top: -100px">

    <div class="row">
        <div class="col-md-6">
        <p class="section-description mt-5"><span class="text-purple">Address:</span> Lorem ipsum dolor sit amet <br><br> <span class="text-purple">Open Time:</span> 9:00 AM - 5:00 PM</p>
        

            
        </div>
        <div class="col-md-6">
        
        </div>
  </div>
</section>


<section class="container section-margin-top section-margin-bottom" style="margin-top: -80px">
<h3 class="section-title text-purple">Contact Us</h3>

<p class="paragraph text-purple">Please fill the form</P>

<div class="container questions-container">



<div class="row mt-5 ">
    <div class="col-md-6">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <label for="email" class="form-label">Name</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="sampletext" style="::placeholder { color: #FFDE1C; }">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Contact Number</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="0873 343 4345" style="::placeholder { color: #FFDE1C; }">
                   
                    
                    
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row mt-5 ">
    <div class="col-md-6">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" style="::placeholder { color: #FFDE1C; }">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="::placeholder { color: #FFDE1C; }">
                   
                    
                    
                </div>
            </div>
        </form>
    </div>
</div>


<button type="submit" class="yellow-btn mt-4">Submit</button>
           
                  
            </form>
               
            </div>
            
        </div>


    </div>



</section>

















@include('layouts.footer')


  