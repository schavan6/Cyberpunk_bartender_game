<!DOCTYPE html>
<html>

<head>
	<title>Game Submit</title>
</head>

<body>
	<?php
	$Adelhyde = 0;
	$Bronson = 0;
	$Delta = 0;
	$Flan = 0;
	$Karmo = 0;
	
	addAll(); //Adds all the inputs one by one to get the total amount of each ingredient regardless of which one is selected.

	//Each of these functions can check what drink is input based on the ingredients
	function BadTouch(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 0 && $Bronson == 2 && $Delta == 2 && $Flan == 2 && $Karmo == 4){
			return 250;
		}
	}
	function Beer(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 1 && $Bronson == 2 && $Delta == 1 && $Flan == 2 && $Karmo == 4){
			return 200;
		}
	}
	function BleedingJane(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 0 && $Bronson == 1 && $Delta == 0 && $Flan == 3 && $Karmo == 0){
			return 200;
		}
	}
	function BloomLight(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 4 && $Bronson == 0 && $Delta == 1 && $Flan == 2 && $Karmo == 3){
			return 230;
		}
	}
	function BlueFairy(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 4 && $Bronson == 0 && $Delta == 0 && $Flan == 1){
			return 170;
		}
	}
	function Brandtini(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 6 && $Bronson == 0 && $Delta == 3 && $Flan == 0 && $Karmo == 1){
			return 250;
		}
	}
	function CobaltVelvet(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 2 && $Bronson == 0 && $Delta == 0 && $Flan == 3 && $Karmo == 5){
			return 280;
		}
	}
	function CreviceSpike(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 0 && $Bronson == 0 && $Delta == 2 && $Flan == 4){
			return 140;
		}
	}
	function FluffyDream(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 3 && $Bronson == 0 && $Delta == 3 && $Flan == 0){
			return 170;
		}
	}
	function FringeWeaver(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 1 && $Bronson == 0 && $Delta == 0 && $Flan == 0 && $Karmo == 9){
			return 260;
		}
	}
	function FrothyWater(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 1 && $Bronson == 1 && $Delta == 1 && $Flan == 1){
			return 150;
		}
	}
	function GrizzlyTemple(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 3 && $Bronson == 3 && $Delta == 3 && $Flan == 0 && $Karmo == 1){
			return 220;
		}
	}
	function GutPunch(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 0 && $Bronson == 5 && $Delta == 0 && $Flan == 1){
			return 80;
		}
	}
	function Marsblast(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 0 && $Bronson == 6 && $Delta == 1 && $Flan == 4 && $Karmo == 2){
			return 170;
		}
	}
	function MercuryBlast(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 1 && $Bronson == 1 && $Delta == 3 && $Flan == 3 && $Karmo == 2){
			return 250;
		}
	}
	function Moonblast(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 6 && $Bronson == 0 && $Delta == 1 && $Flan == 1 && $Karmo == 2){
			return 180;
		}
	}
	function PianoMan(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 2 && $Bronson == 3 && $Delta == 5 && $Flan == 5 && $Karmo == 3){
			return 320;
		}
	}
	function PianoWoman(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 5 && $Bronson == 5 && $Delta == 2 && $Flan == 3 && $Karmo == 3){
			return 200;
		}
	}
	function Piledriver(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 0 && $Bronson == 3 && $Delta == 0 && $Flan == 3 && $Karmo == 4){
			return 160;
		}
	}
	function SparkleStar(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 2 && $Bronson == 0 && $Delta == 1 && $Flan == 0){
			return 150;
		}
	}
	function SugarRush(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 2 && $Bronson == 0 && $Delta == 1 && $Flan == 0){
			return 150;
		}
	}
	function SunshineCloud(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 2 && $Bronson == 2 && $Delta == 0 && $Flan == 0){
			return 150;
		}
	}
	function Suplex(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 0 && $Bronson == 4 && $Delta == 0 && $Flan == 3 && $Karmo == 3){
			return 160;
		}
	}
	function ZenStar(){
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		if($Adelhyde == 4 && $Bronson == 4 && $Delta == 4 && $Flan == 4 && $Karmo == 4){
			return 210;
		}
	}

	function addAll()
	{
		global $Adelhyde, $Bronson, $Delta, $Flan, $Karmo;
		//Adelhyde
		if (isset($_POST['Adelhyde-1'])) {
			$Adelhyde++;
		}
		if (isset($_POST['Adelhyde-2'])) {
			$Adelhyde++;
		}
		if (isset($_POST['Adelhyde-3'])) {
			$Adelhyde++;
		}
		if (isset($_POST['Adelhyde-4'])) {
			$Adelhyde++;
		}
		if (isset($_POST['Adelhyde-5'])) {
			$Adelhyde++;
		}
		if (isset($_POST['Adelhyde-6'])) {
			$Adelhyde++;
		}
		if (isset($_POST['Adelhyde-7'])) {
			$Adelhyde++;
		}
		if (isset($_POST['Adelhyde-8'])) {
			$Adelhyde++;
		}
		if (isset($_POST['Adelhyde-9'])) {
			$Adelhyde++;
		}
		if (isset($_POST['Adelhyde-10'])) {
			$Adelhyde++;
		}
	//Bronson Extract
		if (isset($_POST['Bronson-1'])) {
			$Bronson++;
		}
		if (isset($_POST['Bronson-2'])) {
			$Bronson++;
		}
		if (isset($_POST['Bronson-3'])) {
			$Bronson++;
		}
		if (isset($_POST['Bronson-4'])) {
			$Bronson++;
		}
		if (isset($_POST['Bronson-5'])) {
			$Bronson++;
		}
		if (isset($_POST['Bronson-6'])) {
			$Bronson++;
		}
		if (isset($_POST['Bronson-7'])) {
			$Bronson++;
		}
		if (isset($_POST['Bronson-8'])) {
			$Bronson++;
		}
		if (isset($_POST['Bronson-9'])) {
			$Bronson++;
		}
		if (isset($_POST['Bronson-10'])) {
			$Bronson++;
		}
		//Powdered Delta
		if (isset($_POST['Delta-1'])) {
			$Delta++;
		}
		if (isset($_POST['Delta-2'])) {
			$Delta++;
		}
		if (isset($_POST['Delta-3'])) {
			$Delta++;
		}
		if (isset($_POST['Delta-4'])) {
			$Delta++;
		}
		if (isset($_POST['Delta-5'])) {
			$Delta++;
		}
		if (isset($_POST['Delta-6'])) {
			$Delta++;
		}
		if (isset($_POST['Delta-7'])) {
			$Delta++;
		}
		if (isset($_POST['Delta-8'])) {
			$Delta++;
		}
		if (isset($_POST['Delta-9'])) {
			$Delta++;
		}
		if (isset($_POST['Delta-10'])) {
			$Delta++;
		}
		//Flanergide
		if (isset($_POST['Flanergide-1'])) {
			$Flan++;
		}
		if (isset($_POST['Flanergide-2'])) {
			$Flan++;
		}
		if (isset($_POST['Flanergide-3'])) {
			$Flan++;
		}
		if (isset($_POST['Flanergide-4'])) {
			$Flan++;
		}
		if (isset($_POST['Flanergide-5'])) {
			$Flan++;
		}
		if (isset($_POST['Flanergide-6'])) {
			$Flan++;
		}
		if (isset($_POST['Flanergide-7'])) {
			$Flan++;
		}
		if (isset($_POST['Flanergide-8'])) {
			$Flan++;
		}
		if (isset($_POST['Flanergide-9'])) {
			$Flan++;
		}
		if (isset($_POST['Flanergide-10'])) {
			$Flan++;
		}
		//Karmotrine
		if (isset($_POST['Karmotrine-1'])) {
			$Karmo++;
		}
		if (isset($_POST['Karmotrine-2'])) {
			$Karmo++;
		}
		if (isset($_POST['Karmotrine-3'])) {
			$Karmo++;
		}
		if (isset($_POST['Karmotrine-4'])) {
			$Karmo++;
		}
		if (isset($_POST['Karmotrine-5'])) {
			$Karmo++;
		}
		if (isset($_POST['Karmotrine-6'])) {
			$Karmo++;
		}
		if (isset($_POST['Karmotrine-7'])) {
			$Karmo++;
		}
		if (isset($_POST['Karmotrine-8'])) {
			$Karmo++;
		}
		if (isset($_POST['Karmotrine-9'])) {
			$Karmo++;
		}
		if (isset($_POST['Karmotrine-10'])) {
			$Karmo++;
		}
	}
	?>
</body>

</html>