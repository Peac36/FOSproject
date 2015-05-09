<?php
require_once 'settings.php';

function Insert($table, $data) {
	global $conn;
	foreach ($data as $a => $v) {
		$data[$a] = mysqli_real_escape_string($conn, $v);
	}
	$fields = array_keys($data);
	$values = array_values($data);
	$date = date('y-m-d h:m:s', time());
	$string = "insert into reviews(`name`,`e-mail`,`rate`,`comment`,`date_created`) values('$values[0]','$values[1]','$values[2]','$values[3]','$date')";

	mysqli_query($conn, $string) or die(mysqli_error($conn));

}
function listNews($search = null) {
	global $conn;

	$data = array();
	if ($search) {
		$query = 'select * from `news` where date_created like "%' . $search . '%"';
	} else {
		$query = 'select * from `news` ';

	}
	$q = mysqli_query($conn, $query) or die(mysqli_error($conn));
	while ($result = mysqli_fetch_assoc($q)) {
		array_push($data, $result);
	}
	return $data;

}

function listReviews($best = true) {
	global $conn;

	$data = array();
	if ($best) {
		$q = mysqli_query($conn, 'select * from `reviews` order by `date_created` desc') or die(mysqli_error($conn));
	} else {
		$q = mysqli_query($conn, 'select * from `reviews` order by rate desc  limit 3') or die(mysqli_error($conn));
	}

	while ($result = mysqli_fetch_assoc($q)) {
		array_push($data, $result);
	}

	return $data;

}
function listPages() {
	global $conn;
	$data = array();
	$query = 'select id,title from pages';
	$res = mysqli_query($conn, $query);
	while ($result = mysqli_fetch_assoc($res)) {
		array_push($data, $result);
	}
	return $data;
}
function getPage($id) {
	global $conn;
	$data = array();
	$query = 'select * from pages where id=' . $id . ' limit 1;';
	$res = mysqli_query($conn, $query) or die(mysql_error($conn));
	return $data = mysqli_fetch_assoc($res);
}

function getMax($a, $b) {
	return max($a, $b);
}
function getNumbers($a, $b) {
	$max = max($a, $b);
	$min = min($a, $b);
	for ($i = $min; $i <= $max; $i++) {
//if($i%2==0) ? echo '<strong>'.$i.'</strong>'; : echo  $i;
		if ($i % 2 == 0) {
			echo '<strong>' . $i . '</strong>';
		} else {
			echo $i;
		}
//end foreach
	}
}
$student = array(
	1 => array(
		'fakNo' => '165731',
		'name' => 'Goshko',
		'Age' => '55',
		'Course' => 'Math',
	),
	2 => array(
		'fakNo' => '685904',
		'name' => 'Petranka',
		'Age' => '21',
		'Course' => 'Ecology',
	),
	3 => array(
		'fakNo' => '583590',
		'name' => 'Stefan',
		'Age' => '19',
		'Course' => 'Biology',
	),
);

function sortPeople(array $people, $param) {
	usort($people, function ($a, $b) use ($param) {
		if ($a[$param] > $b[$param]) {
			return true;
		}
		return false;
	});
	return $people;
}

function getShort($data) {
	if (strlen($data) > 300) {
		$trimmed = mb_substr($data, 0, 300, 'UTF-8');

		return $trimmed . '...';
	}
	return $data;

}
function validateForm() {
	global $conn;
	if (isset($_POST['email'], $_POST['pass'], $_POST['rpass'])) {
		$data = array('email' => $_POST['email'], 'password' => $_POST['pass'], 'rpassword' => $_POST['rpass']);
		$errors = array();
		foreach ($data as $a => $v) {
			try {
				if (strlen($v) == 0) {
					throw new Exception('The field is required');
				}

				if ($a === 'password' || $a === 'rpassword') {
					If ($data['password'] !== $data['rpassword']) {
						throw new Exception('The fields are not same');
					}

				}
			} catch (Exception $e) {
				$errors[$a] = $e->getMessage();
			}

		}

		if (count($errors) != 0) {

			return $errors;
		}
		isset($_POST['city']) ? $data['city'] = $_POST['city'] : $data['city'] = null;
		isset($_POST['firstname']) ? $data['firstname'] = $_POST['firstname'] : $data['firstname'] = null;
		isset($_POST['secondname']) ? $data['secondname'] = $_POST['secondname'] : $data['secondname'] = null;
		isset($_POST['sex']) ? $data['sex'] = $_POST['sex'] : $data['sex'] = null;

		mysqli_query($conn, "insert into users(`e_mail`,`password`,`city`,`sex`,`first_name`,`last_name`)
			value('" . $data['email'] . "','" . $data['password'] . "','" . $data['city'] . "','" . $data['sex'] . "','" . $data['firstname'] . "','" . $data['secondname'] . "')") or die(mysqli_error($conn));
		echo "You was register successfully";
		unset($_POST);
	}

}
function getNav($page) {
	$pages = array('home' => '', 'news' => '', 'reviews' => '', 'contact' => '');
	$keys = array_keys($pages);
	if (in_array($page, $keys)) {
		$pages[$page] = 'activenav';
	}
	return $pages;
}
