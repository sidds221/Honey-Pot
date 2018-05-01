"# Honey-Pot" 
README:
The code is written in PHP scripts, we run it on apache server.
The following steps are followed:
1) If apache Server is not installed, Install it on the system. Once it is
installed then on the browser, check http://localhost/Source_code
2) On a linux/ ubuntu machine we keep the php files (Index.php,
backdoor.php, inter.php, hp-conf.php, Honey_log.txt) in the path
/XAMP/htdocs/Source_Code/.
3) We open a browser and open the following link
http://localhost/Source_Code.
This will open the home page and will contain a brief description of
the project.
4) On clicking the link, we will be coordinated to page having the
name, email and another frame which is asked not be filled by
human and a submit catch.
5) On filling the name and the email id not the field requested to be
left clear, we are coordinated to another page saying that email has
been sent.
6) In any case, if we type the name, email and the field which was
requested to be left clear, at that point we are forwarded to another
page giving the alert 404 Not Found and giving the message that the
HostID of the programmer has been noted down.
7) Honey_logs.txt logs the address of the attackers.
