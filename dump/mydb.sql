SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `Person` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Person` (`id`, `name`, `age`) VALUES
(1, 'Ranjit', 20),
(2, 'Rakesh', 25)
(3, 'Dinesh', 18),
(4, 'Karthik', 28);
(5, 'Jers', 30);
