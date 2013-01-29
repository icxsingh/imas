<!DOCTYPE HTML>
<html>
    <head>
        <?php include 'includes/css_javascript_links.php';?>   
        <title>imas Consulting- Contact Us</title>
    </head>
    <body>
     <div id="wrapper">
        <div id="header"></div>
            <div id="nav-container">
                <div id="nav-menu">
                     <nav>
                        <?php include_once("includes/nav_menu.php"); ?>
                     </nav>
                </div>
           </div>
        <script>
            $(function(){
                $("#tabs").tabs();
            });
        </script>
         <div id="content-container">
             <div id="main-content">
               <h3>Contact Us:</h3>
                 <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">by email</a></li>
                        <li><a href="#tabs-2">by mail/phone</a></li>
                    </ul>
                    <div id="tabs-1">
                        <h4>Send us an e-mail using our contact form:</h4>
                   <form name="contactform" method="post" action="email_contact_form.php" class="table-form">
                    <fieldset>
                    <table width="450px">
                        <tr>
                            <td>
                             <label for="first_name">First Name<span class="madatory-field"> *</span></label>
                            </td>
                            <td>
                             <input  type="text" name="first_name" maxlength="50" size="30">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="last_name">Last Name<span class="madatory-field"> *</span></label>
                            </td>
                            <td>
                             <input  type="text" name="last_name" maxlength="50" size="30">
                            </td>
                        </tr>
                        <tr>
                            <td>
                             <label for="email">Email Address<span class="madatory-field"> *</span></label>
                            </td>
                            <td>
                             <input type="text" name="email" maxlength="80" size="30">
                            </td>
                        </tr>
                        <tr>
                            <td>
                             <label for="telephone">Telephone Number</label>
                            </td>
                            <td>
                             <input  type="text" name="telephone" maxlength="30" size="30">
                            </td>
                        </tr>
                        <tr>
                            <td>
                             <label for="comments">Comments<span class="madatory-field"> *</span></label>
                            </td>
                            <td>
                             <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center">
                             <input type="submit" value="Submit">   
                            </td>
                        </tr>
                    </table>
                    </fieldset>
                    </form>
                    </div>
                    <div id="tabs-2">
                        <p> Contact us today to find out more about how IMAS can meet your needs in maritime,
                            quality management, or project management. We would love to hear from you.
                        </p>
                        <ul>
                            <li style="list-style-type: none; padding-left: 30px; color: #2A2F86">
                               8508 E. Southgate Shores Circle<br />
                               Tamarac, Fl. 33321<br />
                               Tel: (305) 209 IMAS <br />
                               Tel: (305) 209 4627 <br />
                               Fax: (305) 909 6463<br />
                               Mobile: (954) 990 9884<br />
           <!--                Email: info@imasconsulting.com<br />-->
                             </li>
                       </ul>
                    </div>
                </div>
               <br /><br /><br /><br /><br /><br /><br /><br />
              </div>
            <div id="bottom-content"></div>
        </div>
         <div id="footer">
            <?php
             include 'includes/footer.php';
            ?> 
         </div>
     </div>
   
    </body>
</html>


