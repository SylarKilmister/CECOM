<!-- BREADCRUMB
        ===============================================================-->
<div class="breadcrumb-container">
    <div class="container text-right">
        <ol class="breadcrumb">
            <li><a href="{$WEB_ROOT}">Inicio</a></li>
            <li class="active">Contacto<i class="fa fa-arrow-down ml5"></i></li>
        </ol>
    </div>
</div>
<section class="bg-white">
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col-md-12">
                <div class="title">
                    <h2>Contacto</h2>
                </div>
            </div>
            <!-- CONTACT INFO -->
            <div class="col-sm-12 col-md-5 cinfo">
                <address>
                    <p><i class="fa fa-map-marker"></i>2da. Oriente Norte No. 473 Col. Centro, Tuxtla Gutiérrez, Chiapas. México</p>
                    <p><i class="fa fa-phone"></i>9616121380</p>
                    <p><i class="fa fa-envelope"></i>informes@cecom.org.mx</p>
                    <p><i class="fa fa-skype"></i>cecom</p>
                </address>
                <div class="visible-xs-block visible-sm-block pt20"></div>
            </div><!-- /Contact Info -->
            <!-- CONTACT FORM -->
            <div class="col-sm-12 col-md-7">
                <form name="contactform" id="contactform" method="post" action="contactmail.php">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <select class="selectpicker" data-style="selectcorp" name="departament" id="departament">
                                        <option value="to1">General Informations</option>
                                        <option value="to2">Administrative</option>
                                        <option value="to3">Marketing</option>
                                        <option value="to4">Sales</option>
                                        <option value="to5">Technical Support</option>
                                        <option value="to6">Human Resources</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="form-group">
                                    <label class="sr-only" for="subject">Subject<br></label>
                                    <div class="inner-addon left-addon">
                                        <i class="fa fa-pencil"></i>
                                        <input type="text" class="form-control required" placeholder="Subject" name="subject" id="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="sr-only" for="name">Name<br></label>
                                    <div class="inner-addon left-addon">
                                        <i class="fa fa-user"></i>
                                        <input type="text" class="form-control required" placeholder="Name" name="name" id="name" data-name="Name">
                                    </div>
                                </div>
                                <div class="row row-lg">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">Email<br></label>
                                            <div class="inner-addon left-addon">
                                                <i class="fa fa-envelope"></i>
                                                <input type="email" class="form-control required required-email" placeholder="Email" name="email" id="email" data-name="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="sr-only" for="name">Phone<br></label>
                                            <div class="inner-addon left-addon">
                                                <i class="fa fa-phone"></i>
                                                <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone" data-name="Phone">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="message">Message<br></label>
                                    <div class="inner-addon left-addon">
                                        <i class="fa fa-comment"></i>
                                        <textarea rows="13" name="message" id="message" class="form-control required" placeholder="Message" data-name="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row actions">
                            <div class="col-sm-12 col-md-6">
                                <input type="submit" value="&#xf1d9; &nbsp;Enviar" name="submit" id="submitButton" class="btn btn-default btn-primary-corp-big" title="Click here to submit your message!" />
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="alert alert-danger" role="alert" id="alertform">...</div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <p>&nbsp;</p>
            </div><!-- /Contact Form -->
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /section -->
