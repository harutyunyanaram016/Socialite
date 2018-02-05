-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2018 at 04:48 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.27-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialite`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `timeline_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `verification_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified` tinyint(1) NOT NULL,
  `remember_token` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `balance` double(8,2) NOT NULL DEFAULT '0.00',
  `birthday` date NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `last_logged` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timezone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `affiliate_id` int(10) UNSIGNED DEFAULT NULL,
  `language` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `timeline_id`, `email`, `verification_code`, `verified`, `email_verified`, `remember_token`, `password`, `balance`, `birthday`, `city`, `country`, `gender`, `active`, `last_logged`, `timezone`, `affiliate_id`, `language`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'admin@socialite.com', 'qWPWHcEQeVMvaXvyK6', 0, 1, 'vZPOcaP2AutY3KvLFNr8XshWr9fBa0Gsux4dlUtnChnYTFXcOrPNiOW6zD2y', '$2y$10$6C0RdbzKbRlP1ByLCs2zEuOs9foaoUnmg.VCHCWEUsx9hti7uY/NC', 0.00, '1992-04-30', 'Hyderabad', 'India', 'male', 1, '2018-02-05 11:59:02', '', NULL, 'en', '2018-01-29 08:22:34', '2018-02-05 13:29:02', NULL),
(2, 2, 'aram30041992@gmail.com', 'LxMufKVLkRVfn6jGIWjcE4cODRBQ25', 0, 1, 'Amf6G8hnGhih1335pZari81MnOU3LDQjcbMIheWUYfOtI1dIeJREs0Q5H67F', '$2y$10$RDzAtqpJUL0qGp2dyxfqgODT2I6XS0lR3zYquVUsBDG0JTOEzMlDa', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 06:04:58', '', 1, 'en', '2018-01-29 09:02:40', '2018-01-30 07:57:54', NULL),
(3, 3, 'aram@mail.com', 'LbsI8umz1iCT1mdz58m8idAyQN61HZ', 0, 1, '3YOeATaehrAIf7Egiuo45QvB1TcAtCJSdtHpHll0MBEGwefKZVcvO2kKUwPx', '$2y$10$4nV/RG69BWE6D8YkFxOn/eF5ohJCAgAPyE0QE9Xv0X4Rnh9dU47ny', 0.00, '1992-04-30', '', 'Armenia', 'male', 1, '2018-02-02 10:54:04', '', 1, 'en', '2018-01-29 10:12:11', '2018-02-02 12:24:04', NULL),
(4, 7, 'aram@111mail.com', '5ijSKqZjS6sWiA1c5wsxOicbhqpZyR', 0, 1, '', '$2y$10$oI.7F0gAtKxdx7/gxf076.5/T6qtuedE5KqGJSKGsEb7K2iIMo1V.', 0.00, '0000-00-00', '', '', 'male', 1, '2018-01-29 13:53:00', '', 3, NULL, '2018-01-29 13:26:55', '2018-01-29 13:26:55', NULL),
(5, 8, 'a@m.com', '9W4opGG5A0AyuYbhv4rJxd15OOagoN', 0, 1, 'uXrkNvSEOzppjbLHSKyHF58nqv7B0NgAQvDRaiQLMG0yAAkhNDYbvGrzSKGk', '$2y$10$04Sqvq2EiS06l5GOq4e.6epq11hWC4IMydFhcu78qv/mWmS65g77u', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 10:54:20', '', 1, NULL, '2018-01-30 07:56:40', '2018-02-02 12:24:20', NULL),
(6, 9, 'test@val.com', 'xMBKEty3T8XFAo6cfLZYUf0jACp2eP', 0, 1, 'euOEv4l8BYAH8k0jO11QiFqP0EtJFUO8OfqeZNQM9iH1AuzlMzrw97VR1OCa', '$2y$10$ceUMeeq8dW3ZrcD29P8hI.lfUw8MaoiH6jq89wcbr81ciI2ODHVeq', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 06:51:16', '', 2, NULL, '2018-01-30 07:58:48', '2018-02-01 08:21:16', NULL),
(7, 10, 'aram016@mail.com', 'L8yYR3QQTVtlK9JV5PJjdBTw1rPaCo', 0, 1, '', '$2y$10$LSKpObdFd.me2VBrVwwM0OwxUefdUn4/Ao55YNkPXrEi11wKBgw5i', 0.00, '0000-00-00', '', '', 'male', 1, '2018-01-30 09:29:10', '', 6, NULL, '2018-01-30 10:58:31', '2018-01-30 10:58:31', NULL),
(8, 11, 'user@a.com', 'fN7snO5WxZ8lXZxUaZ2bkMPiIyhtOU', 0, 1, 'QL974Aw4uRPiugD0cAPCb1YvMCtpjiWMi1h54drgVnGyxpKf8rMDk1dSYntb', '$2y$10$a0BtPiWNjBAwc2uSyF5.G.T9qXZZ8fUtAJZfPN5HQZrublqmUI.sG', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 13:56:07', '', 3, NULL, '2018-02-01 15:24:54', '2018-02-01 15:26:07', NULL),
(9, 12, 'aa@aaa.com', 'WH5R1EI6tSVFBxTEH6rnpMZPFDXN0c', 0, 1, 'jKa330WBqhiB3H9G0CPxAp3VcbXcpmqaEbUtMzhRIcwSBojYCZDb7IM4PydS', '$2y$10$Cml4b1tFaVnRpSHX.NIXXenOa3RYPIa8N/pnQEBZEXB8aSPWDiH4S', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 13:57:36', '', 8, NULL, '2018-02-01 15:26:40', '2018-02-01 15:27:36', NULL),
(10, 13, 'aram016@aa.com', 'EREm0giXgULbUupHnBRy9HnUFBYPkh', 0, 1, 'mFaU3p4jLFf3tnrKbEqiT3VWrLKtidMioSOVA9Fksjz2aEgwEMfLuLSHYB6s', '$2y$10$jFmv9KIfZ/mVUDATHCtSzeqY.rRxrh4ck11UIK7rMZlcwCTMM/Kcq', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 13:59:09', '', 9, NULL, '2018-02-01 15:28:24', '2018-02-01 15:29:09', NULL),
(11, 14, 'us@us.com', 'u0n9El6Sds2LRbkRgkE0eawSpQXMOD', 0, 1, 'S0r3HtkMJhd2h9q95L1vcXTWVI48sBvDfo8tCahzrJDS13o8nDhQLy8GRpvh', '$2y$10$BRRI0kV6Z7zYgY10jqt/7.rvGcKQqDtHZjiOcmEJe.F8Q.nQOtbsy', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 14:01:01', '', 10, NULL, '2018-02-01 15:29:50', '2018-02-01 15:31:01', NULL),
(12, 15, 'a@aaaa.com', 'FYBhJD8L6n2tVldyYxGKnWG4wEAVNp', 0, 1, 'adCCnpwdD8XjNjnhARfzkLdujQDYHDBJLMgn5WxvW9mZTBKhWjVAhsXNEmIg', '$2y$10$DP3itfzuHC2xE5qhfMi1NuG6uGF62KC53UV.aVwPhDWmMIRVO2vGO', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 14:03:02', '', 11, NULL, '2018-02-01 15:31:35', '2018-02-01 15:33:02', NULL),
(13, 16, 'assa@as.com', 'yxsyOn0wvWVZz2RwPTVsBLpr0fPfjU', 0, 1, 'F3B6aMxXOJ5fiej0xrUQbtvWJ4aUhUJNBRnguURAoeal8ko0y5uUX8dbiNUC', '$2y$10$l//5OjVTEg2vt3KvBGHqeeRWisRlYbRn9x.1E4yMp9GVEmWdfhikq', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 14:05:05', '', 12, NULL, '2018-02-01 15:33:37', '2018-02-01 15:35:05', NULL),
(14, 17, 'a@assa.com', '1Zk0I53w31nv2X390IJ3RPN53VmoQU', 0, 1, 'MLpqXzjTdBbaPbNEasqnoQo5SL64NfFJ9ZOydggyIZDQCtFqwtweeoY9wFyI', '$2y$10$qF616hIjPIhtWcASu5fay.a19bLH1ffsS3IRoLmrCJA4Moh7uarBO', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 14:07:00', '', 13, NULL, '2018-02-01 15:35:42', '2018-02-01 15:37:00', NULL),
(15, 18, 'asda@asdasdasd.com', 'tPHN2pBlimCNme0FGNJJyBm4A74RS4', 0, 1, 'F35Og0gKoi4VW1VvVNbtQ6ZLIGIAqCb4pm8n9jwDBzV2fRHOcz8WLQfOPif4', '$2y$10$CVgEdw/sk04K3c/EG1MfEO57WZNXMgHaNmRcLyiIIpibtb9iJ.Xjy', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 14:08:40', '', 14, NULL, '2018-02-01 15:37:35', '2018-02-01 15:38:40', NULL),
(16, 19, 'user@sadasd.com', 'juAP2dRvXTgFscg52smqnfJTkHTQ2o', 0, 1, 'iiJ8IWiJMqSqtSObuElSBlMJJcyhZUfPaP92plC6O4mR4dnmPUwASMz1nUi6', '$2y$10$qXd5o2zGz6i3EVK7mPYKLeWrdkSsbiz0deFm88PMclEPNmGkAHLyS', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 14:10:34', '', 15, NULL, '2018-02-01 15:39:16', '2018-02-01 15:40:34', NULL),
(17, 20, 'ertyert@asdas.com', 'pPBoX2iXYlGpy2TeXydl2iBvkOtxp5', 0, 1, 'EBAYk6XKf3d1fWQJlNR2pYJOD38TfLvFvsLECag0kxP2aACJAAilF66IKF3p', '$2y$10$H.terdbA70JUWE2EtLgJS.goXVkVcIdpz78XXs3L8fpdYcP6cMH7e', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 14:13:06', '', 15, NULL, '2018-02-01 15:41:13', '2018-02-01 15:43:06', NULL),
(18, 21, 'sadasd@sadas.com', 'qYm5R9k5HvLFmjXLv2j28IBHncSNoN', 0, 1, 'TPSbL3qN6l8BOtSXtniGPwsHnnbMvg8XjL9ajeJWaChq7uWR04BJYMBwN9JS', '$2y$10$wwJR.03p6BR5GIDvrt8wueCVxatdrU/jjLfcXk/AL0pflzYgEo8P6', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 14:16:09', '', 17, NULL, '2018-02-01 15:43:46', '2018-02-01 15:46:09', NULL),
(19, 22, 'user12@asdad.com', 'SnpnFvLxXH6UThJRHXaRKugp3pWML1', 0, 1, '', '$2y$10$6Y7MBNiitqwq6WRTm1ePf.g6Q08Oodup65zrR82Y19EzAug4nT7OW', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-01 14:17:09', '', 18, NULL, '2018-02-01 15:46:56', '2018-02-01 15:46:56', NULL),
(20, 24, 'asd@a.com', '5CYQljmsVc3CCPVk3Eqlvx4dVnlfme', 0, 1, '', '$2y$10$D70VXuw6K11nz6n8w4LEmeac5iCxeBlbsUgMEHeKCmqSKS9vPfCkW', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 11:25:28', '', NULL, NULL, '2018-02-02 12:49:49', '2018-02-02 12:49:49', NULL),
(23, 25, 'dadafdgdfgsd@a.com', 'kBaTDCAPmWnaSzAugt81DiYo898GVW', 0, 0, '', '$2y$10$sX6U5AXdzTkY19BsHGUOSe61PHVGgCJDxhnwyB0VADNQJiZPfTdyK', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 11:59:39', '', 15, NULL, '2018-02-02 13:02:07', '2018-02-02 13:02:07', NULL),
(27, 27, 'dadasghfghfgd@a.com', 'zO1DuDWaGu9elip1xMnujNZl1tBLpR', 0, 0, '', '$2y$10$LJIvM9Sp4ann.UZBy1q9UeigEcaQkrQWuAxri5KWFkUMmoS8j936C', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 11:59:33', '', 11, NULL, '2018-02-02 13:26:28', '2018-02-02 13:26:28', NULL),
(28, 28, 'dadasddffd@a.com', 'SarkEL8y7eC9DhFrPNUBHKBHGjXyCa', 0, 0, '', '$2y$10$XYeY5jUGteisKv77vK57PuS7GBJQbHvfEZTfq/svppoV1CDr5no8O', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 12:36:48', '', NULL, NULL, '2018-02-02 13:27:53', '2018-02-02 13:27:53', NULL),
(29, 29, 'dadasdfgdfgd@a.com', 'ghYF0FaAIOmOgfRDlGbby8lKRYnCUU', 0, 0, '', '$2y$10$OSOKuVF0sISJqvcX05161u49VdzkCi7UVMcCsvKSWiZKmhy6X.dhu', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 12:00:26', '', NULL, NULL, '2018-02-02 13:28:52', '2018-02-02 13:28:52', NULL),
(32, 32, 'awe45@awe.com', 'il5jotKnaTvxlrDNFIvA42rBBAX0d1', 0, 0, '', '$2y$10$W58BiOGB4mzX2hKU7dclH.BVqRhM5jrmh4z16g4gPurbtDppHzd02', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 12:11:23', '', 5, NULL, '2018-02-02 13:38:37', '2018-02-02 13:38:37', NULL),
(33, 33, 'awe5445@awe.com', '3FvjwhZLu1nrdIJ1L6Hoe8c0NGS9sM', 0, 0, '', '$2y$10$DP9U35pm8HIp3BXGY0BUTevHcbW8wygV2q7oxmvw8LrY.k3XIpkJi', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 12:11:16', '', 16, NULL, '2018-02-02 13:40:48', '2018-02-02 13:40:48', NULL),
(34, 34, 'awsdfsdfe@awe.com', '7UjdqgkrffjmlvDZTzFuFQXxSRB8i1', 0, 0, '', '$2y$10$qlGDSx1MqqwYkT7P7B1Fder.T2dYg099acxov8bDFtY/NOtFm9WV6', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 12:44:44', '', NULL, NULL, '2018-02-02 13:47:54', '2018-02-02 13:47:54', NULL),
(35, 35, 'awe@awe.com', 'BFAbvyYOzGUKktXneFdlHX1EdXHK3o', 0, 0, '', '$2y$10$eAmyzheT6LD00ES3s9TghOMxxFDRkpRJLS/cbhUGp0pFvtBG1FgEu', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-02 12:21:05', '', 8, NULL, '2018-02-02 13:51:05', '2018-02-02 13:51:05', NULL),
(36, 36, 'zzz@zz.com', 'segf1JBH0cNebbnx9X4Zelwbh2bQvu', 0, 1, '', '$2y$10$MQICD09ZRyDQH.BbSqYoDOKqycPdMSecqN3f7cUqBosXCl6TVw8Iy', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-05 11:56:20', '', NULL, NULL, '2018-02-05 13:25:30', '2018-02-05 13:25:30', NULL),
(37, 37, 'aram0161@asde.com', 'xPeVrJ1OKpbA9bOEQ0SBaWS9DLfjsP', 0, 0, '', '$2y$10$LFcUsYcA5yebJQ1LsYCWkeVFf0b/Rq5yN7Zj5RwG.6.2QomqM57Ha', 0.00, '0000-00-00', '', '', 'male', 1, '2018-02-05 12:01:49', '', NULL, NULL, '2018-02-05 13:31:49', '2018-02-05 13:31:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_timeline_id_foreign` (`timeline_id`),
  ADD KEY `users_affiliate_id_foreign` (`affiliate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_affiliate_id_foreign` FOREIGN KEY (`affiliate_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_timeline_id_foreign` FOREIGN KEY (`timeline_id`) REFERENCES `timelines` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
