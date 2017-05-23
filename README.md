# 328-blogger

CREATE TABLE IF NOT EXISTS `blogger` (
  `userID` int(11) NOT NULL,
  `username` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `blogCount` int(11) NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `blogs` (
  `blogKey` int(11) NOT NULL,
  `blogName` varchar(63) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `blogDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blogContent` text COLLATE utf8_unicode_ci NOT NULL,
  `firstLine` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
