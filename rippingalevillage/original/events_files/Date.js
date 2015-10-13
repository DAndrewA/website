/**************************
Pauline Warman: 15/08/2004
***************************/

update = new Date(document.lastModified)
theMonth = update.getMonth() +1
theDate = update.getDate()
theYear = update.getFullYear()
document.write("<font color='#336699'><font size='1'><b>Last updated:&nbsp;&nbsp;" + theDate + "/"+ theMonth + "/"  + theYear + "</b></font></font>")

