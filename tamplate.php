<!DOCTYPE html>
<html>
	<head><title>Latihan Layout Web Table</title></head>
	<body>
		<h3 align="center"></h3>
		<table align="center" border="1" cellpadding="20" cellspacing="0"
		    width="100%">
            <tr>
                <td colspan="3" align="center" background="https://cdn.pixabay.com/photo/2015/11/19/08/52/banner-1050629_960_720.jpg" 
                style="color: white;" >Daftar Menu</td>
            </tr>
            <tr>
                <td width="20%" bgcolor="aqua">
                    <fieldset>
                        <legend align="center" >Link</legend>
                        <ul>
                            <li>Home</li>
                            <li>About Us</li>
                            <li>Gallery</li>
                            <li>Contact Us</li>
                        </ul>
                    </fieldset>
                </td>
                <td width="60%">
                    <?php
                    include('tugas1.php')
                    ?>
                </td>
                <td width="20%" bgcolor="aqua">
                    <fieldset>
                    <legend align="center">Tautan</legend>
                    <ul>
                        <li>Kampus Merdeka</li>
                        <li>Nf Comp</li>
                        <li>LMS</li>
                        <li>Instagram</li>
                    </ul>
                </fieldset>
            </td>
            </tr>
            <tr>
                <th colspan="3" bgcolor="orange">Design By : Hans</th>
            </tr>
</table>
	</body>
</html>
