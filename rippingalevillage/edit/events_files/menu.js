	var NoOffFirstLineMenus=9;			
	var LowBgColor='#ffffff';//changed from blue
	var LowSubBgColor='white';			
	var HighBgColor='#336699';			
	var HighSubBgColor='white';			
	var FontLowColor='#336699'; //changed from white			
	var FontSubLowColor='#336699';			
	var FontHighColor='white';			
	var FontSubHighColor='#9933FF';			
	var BorderColor='ffffff';			
	var BorderSubColor='#E1E1F4';			
	var BorderWidth=1;				
	var BorderBtwnElmnts=1;			
	var FontFamily="arial,verdana,tahoma,'Times New Roman'"	
	var FontSize=9;				
	var FontBold=0;				
	var FontItalic=0;				
	var MenuTextCentered='left';			
	var MenuCentered='center';			
	var MenuVerticalCentered='top';		
	var ChildOverlap=.05;				
	var ChildVerticalOverlap=.2;			
	var StartTop=135;	
	var StartLeft=0;				
	var VerCorrect=0;				
	var HorCorrect=0;		
	var LeftPaddng=3;				
	var TopPaddng=2;				
	var FirstLineHorizontal=1;			
	var MenuFramesVertical=1;			
	var DissapearDelay=1000;			
	var TakeOverBgColor=1;			
	var FirstLineFrame='navig';		
	var SecLineFrame='space';	
	var DocTargetFrame='space';			
	var TargetLoc='';				
	var HideTop=0;				
	var MenuWrap=1;				
	var RightToLeft=0;				
	var UnfoldsOnClick=0;			
	var WebMasterCheck=0;			
	var ShowArrow=0;				
	var KeepHilite=1;				
	var Arrws=['tri.gif',5,10,'tridown.gif',10,5,'trileft.gif',5,10];	

function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}


// Menu tree
//	MenuX=new Array(Text to show, Link, background image (optional), number of sub elements, height, width);
//	For rollover Images set "Text to show" to:  "rollover:Image1.jpg:Image2.jpg"

Menu1=new Array("Home","index.htm","",0,20,45);

Menu2=new Array("Rippingale","","",9,20,75);
	Menu2_1=new Array("Rippingale Village","RippingaleVillage.htm","",0,20,200);
	Menu2_2=new Array("Early History of Rippingale","RippingaleEarlyHistory.htm","",0);
	Menu2_3=new Array("Recent History of Rippingale","RippingaleRecentHistory.htm","",0);
	Menu2_4=new Array("History of Rippingale Allotments","AllotmentHistory-index.htm","",0);
	Menu2_5=new Array("Rippingale Past and Present","PastAndPresent.htm","",0);
	Menu2_6=new Array("School","School.htm","",0);
	Menu2_7=new Array("Photo Gallery","PhotoGallery.htm","",0);
	Menu2_8=new Array("Village Archives","VillageArchives.htm","",0);
	Menu2_9=new Array("Country Eye","CountryEye.htm","",0);

Menu3=new Array("Parish Council","","",8,20,95);
	Menu3_1=new Array("About the Council","PC-ParishCouncil.htm","",0,20,190);
	Menu3_2=new Array("Your Councillors","PC-YourCouncillors.htm","",0);
	Menu3_3=new Array("Minutes","PC-Minutes.htm","",0);
	Menu3_4=new Array("Planning Applications","PC-PlanningApplications.pdf","",0);	
	Menu3_5=new Array("Annual Reports","PC-AnnualReports.htm","",0);
	Menu3_6=new Array("Audit & Accounts","PC-AuditAndAccounts.htm","",0);
	Menu3_7=new Array("Statutory & Policy Documents","PC-StatutoryAndPolicyDocs.htm","",0,20,200);
	Menu3_8=new Array("Archives","PC-CouncilArchiveList.htm","",0);	
	
	
Menu4=new Array("Village Affairs","","",8,20,90);
	Menu4_1=new Array("St Andrew's Church","Church.htm","",0,20,180);
	Menu4_2=new Array("Village Hall","Hall.htm","",0);
	Menu4_3=new Array("Neighbourhood Watch","NeighbourhoodWatch.htm","",0);
	Menu4_4=new Array("Village Design Committee","VDC.htm","",0);
	Menu4_5=new Array("Rippingale News","Newsletter.htm","",0);
	Menu4_6=new Array("Oil Consortium","OC-Home.htm","",0);
	Menu4_7=new Array("Rippingale Feast","RF-Home.htm","",0);
	Menu4_8=new Array("Birth of the Archers","Archers.htm","",0);			

Menu5=new Array("Activities & Groups","","",11,20,115);
	Menu5_1=new Array("Women's Institute","WomensInstitute.htm","",0,20,150);
	Menu5_2=new Array("Rippingale Junior Football","RipJuniorFootball.htm","",0);
	Menu5_3=new Array("Gardening Club","GardeningClub.htm","",0);
	Menu5_4=new Array("Allotment Group","Allotment.htm","",0);
	Menu5_5=new Array("Friendship Group","FriendshipClub.htm","",0);
	Menu5_6=new Array("Cribbage Team","Cribbage.htm","",0);	
	Menu5_7=new Array("Bourne to Linedance","Linedance.htm","",0);
	Menu5_8=new Array("Rippingale Feast","RF-Home.htm","",0);	
	Menu5_9=new Array("Bunting Babes","BB-BuntingBabes.htm","",0);
	Menu5_10=new Array("Painting Group","PG-PaintingGroup-Home.htm","",0);
	Menu5_11=new Array("Cheeky Monkeys","CM-CheekyMonkeys-Home.htm","",0);	
	
	
Menu6=new Array("Services","","",13,20,60);
	Menu6_1=new Array("Rippingale Surgery","Doctors.htm","",0,20,150);
	Menu6_2=new Array("Hospital Car Service","HospitalCarService.htm","",0);
	Menu6_3=new Array("Mobile Library","RipLibrary.htm","",0);
	Menu6_4=new Array("The Shop","shop.htm","",0);
	Menu6_5=new Array("The Bull","Bull.htm","",0);
	Menu6_6=new Array("Recycling","Recycling.htm","",0);
	Menu6_7=new Array("Bus Services","BusServices.htm","",0);
	Menu6_8=new Array("Local Businesses","LocalBusinesses.htm","",0);
	Menu6_9=new Array("Small Ads","SmallAds.htm","",0);
	Menu6_10=new Array("Local Search","LocalSearch.htm","",0);
	Menu6_11=new Array("LIVES","Lives.htm","",0);
	Menu6_12=new Array("Local Weather","Weather.htm","",0);
	Menu6_13=new Array("Police 101","Police101Flyer.pdf","",0);
	
	
Menu7=new Array("News and Events","","",6,20,110);
	Menu7_1=new Array("Rippingale News","Newsletter.htm","",0,20,150);
	Menu7_2=new Array("News Clips","NewsClips.htm","",0);	
	Menu7_3=new Array("General Notices","GeneralNotices.htm","",0);
	Menu7_4=new Array("Announcements","Announcements.htm","",0);
	Menu7_5=new Array("Events Calendar","Events.htm","",0);
	Menu7_6=new Array("Past Events (Photos)","PastEvents.htm","",0);
	
	
	

Menu8=new Array("Links","","",1,20,40);
	Menu8_1=new Array("Links","Links.htm","",0,20,80);

Menu9=new Array("About Us","","",4,20,65);
	Menu9_1=new Array("About Us","AboutUs.htm","",0,20,150);
	Menu9_2=new Array("Terms & Condiditons","TermsConditions.htm","",0);
	Menu9_3=new Array("Accessibility","Accessibility.htm","",0);
	Menu9_4=new Array("Contact Us","ContactUs.htm","",0);
	
	
		