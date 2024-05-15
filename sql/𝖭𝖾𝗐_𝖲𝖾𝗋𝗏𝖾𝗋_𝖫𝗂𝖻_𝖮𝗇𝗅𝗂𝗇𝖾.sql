 𝖢𝗋𝖾𝖺𝗍𝗈𝗋𝖵𝗂𝗀𝗇𝖾𝗌𝗁 𝖳𝖾𝖺𝗆 ❤️

𝖵𝗂𝗌𝗂𝗍 : 𝖼𝗋𝖾𝖺𝗍𝗈𝗋𝗏𝗂𝗀𝗇𝖾𝗌𝗁.𝗑𝗒𝗓 🔥

𝖲𝗁𝖺𝗋𝖾 𝖶𝗂𝗍𝗁 𝖢𝗋𝖾𝖽𝗂𝗍𝗌 😏

𝖩𝗈𝗂𝗇 : @𝖢𝗋𝖾𝖺𝗍𝗈𝗋𝖵𝗂𝗀𝗇𝖾𝗌𝗁 😋



CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `clientes` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Vendedor` text NOT NULL,
  `StartDate` timestamp NULL DEFAULT NULL,
  `EndDate` timestamp NULL DEFAULT NULL,
  `UID` varchar(60) DEFAULT NULL,
  `Expiry` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
