INSERT INTO `civicrm_payment_processor_type` (`name`, `title`, `description`, `is_active`, `is_default`, `user_name_label`, `password_label`, `signature_label`, `subject_label`, `class_name`, `url_site_default`, `url_api_default`, `url_recur_default`, `url_button_default`, `url_site_test_default`, `url_api_test_default`, `url_recur_test_default`, `url_button_test_default`, `billing_mode`, `is_recur`, `payment_type`)
VALUES
  ('CyberSource', 'CyberSource', NULL, 1, 0, 'Merchant ID', NULL, NULL, NULL, 'Payment_CyberSource', NULL, NULL, NULL, NULL, 'https://orderpagetest.ic3.com/hop/ProcessOrder.do', NULL, NULL, NULL, 1, 0, 1);

