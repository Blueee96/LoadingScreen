# Mallard LoadScreen Installation
Thank you for purchasing Mallard LoadScreen. Please do not redistribute this as it is a copyrighted software good that is sold on
a digital marketplace.

Made with ♥ by a small development group for your Garry's Mod server.

Addon Store, Support Page: https://www.gmodstore.com/market/view/2247
For more updated information and newer versions, be sure to check that page regularly.

# REQUIREMENTS
- Web server requirements:
   - Must support PHP 5.3 or later
   - Must have fopen enabled
- Game server requirements:
   - Server query enabled for game info to display

# INSTALLATION
1. Upload the contents of the loading screen to a directory on your web server.
   - If you are unsure of what a web server is, you may need to look into getting web hosting.
2. If you uploaded a compressed archive (e.g. .zip) of the loading screen to the web server, be sure to extract it.
3. Place the contents on your web server in a directory where you would like it to appear in the website listing, e.g.
   `mysite.com/loadingscreen/darkrp`
4. Now, continue to configure and setup the loading screen and game server. See the next section for details.

# CONFIGURATION & SETUP
1. Edit `config.php` to your liking, make sure you include your server IP and server port or the functionality will not work.
    - Note that in the config, you do *not* need to provide a Steam API key anymore. To make it more convenient for users configuring
      the loading screen, we found a way to obtain the necessary Steam information through other protocols and technology that do not
      require an API key. This should make it easier to maintain your loading screen in the long term.

2. Place the backgrounds you want in the backgrounds folder, the loading screen will automatically add them. You can remove
   the default ones or use them instead of your own.

3. Place any music files that you wish to play in the music folder, these must be in OGG format. The loading screen will
   automatically add them. You can remove the default ones or use them instead of your own.

4. Find a web host you like and upload the loading screen to your hosting, if you need help doing this please contact your
   web host's support rather than us.

5. Check to see all is good by heading to the URL you stored the loading screen at. Don't worry if the gamemode doesn't show up,
   the loading screen can only grab this information when loading into the server.

6. On your game server, in your `server.cfg` or other convar configuration area set your `sv_loadingurl` to wherever you uploaded the loading screen along with
   '?steamid=%s'. It should look like this in your `server.cfg`:
   `sv_loadingurl "http://domain.com/loadingscreen/includes/php/mode1.php?steamid=%s"`
   - **This is where you select which mode you would like:** replace `mode1.php` in the `sv_loadingurl` to whatever mode you
   want: `mode1.php`, `mode2.php`, `mode3.php`, `mode4.php`, `mode5.php`

   Choose which mode you would like based on the layout and info widgets it offers:

   | Mode        | Progress Bar | Header | Core Rules | About Us | User Info | Tips | Server Info | 
   | ----------- | ------------ | ------ | ---------- | -------- | --------- | ---- | ----------- |
   | `mode1.php` | ✅          | ✅     | ✅ (8)    | ✅ (md)  | ✅       | ❌   | ❌         |
   | `mode2.php` | ✅          | ✅     | ✅ (8)    | ✅ (md)  | ✅       | ❌   | ❌         |
   | `mode3.php` | ✅          | ✅     | ✅ (5)    | ✅ (md)  | ✅       | ✅   | ✅         |
   | `mode4.php` | ✅          | ✅     | ❌        | ✅ (lg)  | ✅       | ✅   | ✅         |
   | `mode5.php` | ✅          | ✅     | ❌        | ✅ (lg)  | ✅       | ❌   | ✅         |

   It is ideal to test these out in your browser to see which one you like the most.

7. Load into your server with a beautiful new loading screen and enjoy!

8. Don't forget to leave a review if you like it! You can do so on the store page: https://www.gmodstore.com/market/view/2247