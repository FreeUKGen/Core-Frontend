<!DOCTYPE html>

<html class="voluteer">

<?php include("templates/header.php"); ?>


            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.php">Home</a> /</li>
                    <li><a href="volunteer.php">Volunteer</a> /</li>
                    <li>Sign Up</li>
                </ul>
            </div><!-- /breadcrumbs -->
            
            <div id="content">
                
                <h1>Sign Up</h1>
                
                <p class="callout">If you have any questions about volunteering, see the <a href="volunteer.php">Volunteer Page</a> for more information.</p>
                
                <div class="login_content">
                
                
                
                <form class="search_query" action="volunteer_landing_page.php">
                <fieldset class="login_info">
                <ol>
                <li>
                <label class="login_name" for="login_firstname">First Name</label>
                <input id="login_name" length="10" name="login_firstname" size="20" type="text"/>
                </li>
                <li>
                <label class="login_name" for="login_lastname">Last Name</label>
                <input id="login_name" length="10" name="login_lastname" size="20" type="text"/>
                </li>
                <li>
                <label class="login_name" for="login_username">User Name</label>
                <input id="login_name" length="10" name="login_username" size="20" type="text"/>
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
                <input name="commit" type="submit" value="Sign Up"/>
              </li>
            </ol>
            
          </fieldset>
                
                </form>
                </div><!-- /login_content -->
                
                
                
            </div> <!-- /#content -->
            
            <div id="footer">
                
            </div>
            
            
        </div><!-- /#container -->
        
    </body>
</html>
