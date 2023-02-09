<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 						<form action="includes/signup.inc.php" method="post">
                            <input type="text" name="uid" placeholder="name of organization">
                            <input type="text" name="rep" placeholder="organization's representative">
                            <input type="text" name="mail" placeholder="representative's email">
                            
                            <!-- <select name="pwd">
                                <option selected>choose</option>
                                <option>v</option>
                                <option>uk</option>
                                <option>jjb</option>
                                <option>k</option> -->
                            <!-- </select> -->

                            <select name="servis" id="servis">
                                <option value="">-Select desired service-</option>
                                <option value="tp">turnkey project</option>
                                <option value="nc">new construction</option>
                                <option value="if">interior fit-outs</option>
                                <option value="rar">remodels and rennovations</option>
                                <option value="top">take over projects</option>
                                <option value="si">site improvements</option>
                            </select>
                            <input type="file" name="doc" class="form-control" accept=".pdf,.txt,.xlms" title="Upload relevant document"/>
							<button type="submit" name="submit">SUBMIT BID</button>
                        </form>

</body>
</html>