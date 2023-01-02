@extends('layouts.front')
@section('title','Contact')
@section('content')




        <!-- # site-content
        ================================================== -->
        <div id="content" class="s-content s-content--page">

                <div class="row entry-wrap">
                    <div class="column lg-12">

                        <article class="entry">

                            <header class="entry__header entry__header--narrow">
    
                                <h1 class="entry__title">
                                    Say Hello.
                                </h1>
    
                            </header>

                            <div class="entry__media">
                                <figure class="featured-image">
                                    <img src="{{asset('images/thumbs/contact/contact-1200.jpg')}}" 
                                      srcset="{{asset('images/thumbs/contact/contact-2400.jpg 2400w, 
                                              images/thumbs/contact/contact-1200.jpg 1200w, 
                                              images/thumbs/contact/contact-600.jpg 600w')}}" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                                </figure>
                            </div>

                            <div class="content-primary">

                                <div class="entry__content">
        
                                    <p class="lead">
                                    Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor 
                                    sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat 
                                    enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco 
                                    magna amet magna cupidatat qui labore cillum cillum cupidatat fugiat nostrud.</p> 

                                    <p>
                                    Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae 
                                    qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi 
                                    repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est 
                                    praesentium. 
                                    </p>

                                    <div class="row block-large-1-2 block-tab-whole entry__blocks">
                                        <div class="column">
                                            <h4>Where to Find Us</h4>
                                            <p>
                                            1600 Amphitheatre Parkway<br>
                                            Mountain View, CA<br>
                                            94043 US
                                            </p>
                                        </div>
        
                                        <div class="column">
                                            <h4>Contact Info</h4>
                                            <p>
                                            someone@yourdomain.com<br>
                                            info@yourdomain.com <br>
                                            Phone: (+63) 555 1212
                                            </p> 
                                        </div>
                                    </div>

                                    <h4>Feel Free to Say Hi.</h4>

                                    <form name="cForm" id="cForm" class="entry__form" method="post" action="" autocomplete="off">
                                        <fieldset class="row">

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="cName" id="cName" class="u-fullwidth" placeholder="Your Name" value="" type="text">
                                            </div>

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="cEmail" id="cEmail" class="u-fullwidth" placeholder="Your Email" value="" type="text">
                                            </div>

                                            <div class="column lg-12 form-field">
                                                <input name="cWebsite" id="cWebsite" class="u-fullwidth" placeholder="Website" value="" type="text">
                                            </div>

                                            <div class="column lg-12 message form-field">
                                                <textarea name="cMessage" id="cMessage" class="u-fullwidth" placeholder="Your Message"></textarea>
                                            </div>

                                            <div class="column lg-12">
                                                <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Add Comment" type="submit">
                                            </div>

                                        </fieldset>
                                    </form> <!-- end form -->

                            </div> <!-- end content-primary -->

                        </article> <!-- end entry -->

                    </div>
                </div> <!-- end entry-wrap -->
        </section> <!-- end s-content -->

@endsection