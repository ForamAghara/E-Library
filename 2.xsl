<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2>Book</h2>
<table border="1">
<tr bgcolor="#9acd32">
<th style="text-align:left">User Name</th>
<th style="text-align:left">Book 1</th>
<th style="text-align:left">Book 2</th>
<th style="text-align:left">Book 3</th>
<th style="text-align:left">Book 4</th>
<th style="text-align:left">Book 5</th>
<th style="text-align:left">Total Book</th>

</tr>
<xsl:for-each select="data/User">
<tr>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="book1"/></td>
<td><xsl:value-of select="book2"/></td>
<td><xsl:value-of select="book3"/></td>
<td><xsl:value-of select="book4"/></td>
<td><xsl:value-of select="book5"/></td>
<td><xsl:value-of select="totbk"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
