<?
	class Viewer {
		public static view() {
			foreach($row As $key=>$value)
				echo "<b>$key</b> = $value";
		}
		
		public static clear() {
			unset($row);
		}
	};