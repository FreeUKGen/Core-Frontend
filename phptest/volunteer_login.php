<!DOCTYPE html>

<html class="voluteer">

<?php include("templates/header.php"); ?>


            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.php">Home</a> /</li>
                    <li><a href="volunteer.php">Volunteer</a> /</li>
                    <li>Log In</li>
                </ul>
            </div><!-- /breadcrumbs -->
            
            <div id="content">
                
                <h1>Log In</h1>
                
                <p class="callout">If you have any questions about volunteering, see the <a href="volunteer.php">Volunteer Page</a> for more information.</p>
                
                <div class="login_content">
                <p><a href="volunteer_signup.php">Sign up for account</a> | <a href="volunteer_password_reset.php">Reset Password</a></p>
                
                
                
                <form class="search_query" action="volunteer_landing_page.php">
                <fieldset class="login_info">
                <ol>
                <li>
                <label class="login_name" for="login_name">User Name</label>
                <input id="login_name" length="10" name="login_name" size="20" type="text"/>
                </li>
                <li>
                <label class="login_pass" for="login_pass">Password</label>
                <input id="login_pass" length="10" name="login_name" size="20" type="text"/>
                </li>
</ol>
</fieldset>

<fieldset class="actions">
            <ol>
              <li class="action input_action " id="login_submit_action">
                <input name="commit" type="submit" value="Log In"/>
              </li>
            </ol>
            
          </fieldset>
                
                </form>
                <p><a href="volunteer_coordinator_landing_page.php">view coordinator dashboard</a> (Temporary link while in development)</p>
                </div><!-- /login_content -->
                
                
                
            </div> <!-- /#content -->
            
            <div id="footer">
                
            </div>
            
            
        </div><!-- /#container -->
        
    </body>
</html>
