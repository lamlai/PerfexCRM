<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Tên';
$lang['options']              = 'Cài đặt';
$lang['submit']               = 'Lưu lại';
$lang['added_successfully']    = 'Đã thêm %s.';
$lang['updated_successfully']  = 'Cập nhật thành công %s.';
$lang['edit']                 = 'Chỉnh sửa %s';
$lang['add_new']              = 'Thêm %s mới';
$lang['deleted']              = 'Đã xóa %s.';
$lang['problem_deleting']     = 'Xảy ra vấn đề khi đang xóa %s';
$lang['is_referenced']        = 'ID của %s đang được sử dụng.';
$lang['close']                = 'Đóng';
$lang['send']                 = 'Gửi đi';
$lang['cancel']               = 'Hủy';
$lang['go_back']              = 'Quay lại';
$lang['error_uploading_file'] = 'Phát sinh lỗi khi đang đăng tải tập tin';
$lang['load_more']            = 'Tải thêm';
$lang['cant_delete_default']  = 'Không thể xóa %s mặc định';

# Invoice General
$lang['invoice_status_paid']                = 'Đã thanh toán';
$lang['invoice_status_unpaid']              = 'Chưa thanh toán';
$lang['invoice_status_overdue']             = 'Quá hạn';
$lang['invoice_status_not_paid_completely'] = 'Đã thanh toán một phần';

$lang['invoice_pdf_heading'] = 'HÓA ĐƠN';

$lang['invoice_table_item_heading']            = 'Sản phẩm';
$lang['invoice_table_quantity_heading']        = 'Số lượng';
$lang['invoice_table_rate_heading']            = 'Giá';
$lang['invoice_table_tax_heading']             = 'Thuế';
$lang['invoice_table_amount_heading']          = 'Tổng';
$lang['invoice_subtotal']                      = 'Chưa qua thuế - Chi phí';
$lang['invoice_adjustment']                    = 'Điều chỉnh';
$lang['invoice_total']                         = 'Thành tiền';
$lang['invoice_vat']                           = 'Mã số thuế';
$lang['invoice_bill_to']                       = 'Người nhận';
$lang['invoice_data_date']                     = 'Ngày xuất hóa đơn:';
$lang['invoice_data_duedate']                  = 'Hạn trả:';
$lang['invoice_received_payments']             = 'Thanh toán';
$lang['invoice_no_payments_found']             = 'Chưa nhận được tiền cho hóa đơn này';
$lang['invoice_note']                          = 'Ghi chú:';
$lang['invoice_payments_table_number_heading'] = 'Đơn hàng #';
$lang['invoice_payments_table_mode_heading']   = 'Hình thức thanh toán';
$lang['invoice_payments_table_date_heading']   = 'Ngày thanh toán';
$lang['invoice_payments_table_amount_heading'] = 'Số tiền';


# Announcements
$lang['announcement']                 = 'Thông báo';
$lang['announcement_lowercase']       = 'thông báo';
$lang['announcements']                = 'Thông báo';
$lang['announcements_lowercase']      = 'thông báo';
$lang['new_announcement']             = 'Thông báo mới';
$lang['announcement_name']            = 'Chủ đề';
$lang['announcement_message']         = 'Nội dung';
$lang['announcement_show_to_staff']   = 'Hiển thị cho nhân viên';
$lang['announcement_show_to_clients'] = 'Hiển thị cho khách hàng';
$lang['announcement_show_my_name']    = 'Hiển thị tên của tôi';

# Clients
$lang['clients']                               = 'Khách hàng';
$lang['client']                                = 'Khách hàng';
$lang['new_client']                            = 'Khách hàng mới';
$lang['client_lowercase']                      = 'khách hàng';
$lang['client_delete_tooltip']                 = 'Mọi thông tin về khách hàng sẽ bị xóa (bao gồm hợp đồng, yêu cầu hỗ trợ, ghi chú). LƯU Ý: Nếu còn hóa đơn sót lại thì khách hàng sẽ không bị xóa. Bạn phải chuyển những hóa đơn này sang khách hàng khác nhằm giữ lại mã số hóa đơn.';
$lang['customer_delete_invoices_warning']      = 'Tài khoản khách hàng này vẫn còn giữ hóa đơn. Bạn không thể xóa khách hàng này. Chuyển tất cả hóa đơn còn sót sang khách hàng khác để tiến hành xóa.';
$lang['client_firstname']                      = 'Tên';
$lang['client_lastname']                       = 'Họ';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Tên doanh nghiệp';
$lang['client_vat_number']                     = 'Mã số thuế';
$lang['client_address']                        = 'Địa chỉ';
$lang['client_city']                           = 'Thành phố';
$lang['client_postal_code']                    = 'Mã bưu chính';
$lang['client_state']                          = 'Tiểu bang';
$lang['client_password']                       = 'Mật khẩu';
$lang['client_password_change_populate_note']  = 'Lưu ý: nếu bạn nhập mới những mục này, mật khẩu của liên hệ sẽ bị thay đổi.';
$lang['client_password_last_changed']          = 'Lần cuối đổi mật khẩu:';
$lang['login_as_client']                       = 'Đăng nhập với tư cách khách hàng';
$lang['client_invoices_tab']                   = 'Hóa đơn';
$lang['contracts_invoices_tab']                = 'Hợp đồng';
$lang['contracts_tickets_tab']                 = 'Yêu cầu hỗ trợ';
$lang['contracts_notes_tab']                   = 'Ghi chú';
$lang['client_invoice_number_table_heading']   = 'Hóa đơn #';
$lang['client_invoice_date_table_heading']     = 'Ngày xuất';
$lang['client_invoice_due_date_table_heading'] = 'Hạn trả';
$lang['client_string_table_heading']           = 'Khách hàng';
$lang['client_amount_table_heading']           = 'Tổng';
$lang['client_status_table_heading']           = 'Trạng thái';
$lang['note_description']                      = 'Mô tả ghi chú';

$lang['client_string_contracts_table_heading']      = 'Khách hàng';
$lang['client_start_date_contracts_table_heading']  = 'Ngày bắt đầu';
$lang['client_end_date_contracts_table_heading']    = 'Ngày kết thúc';
$lang['client_description_contracts_table_heading'] = 'Mô tả';
$lang['client_do_not_send_welcome_email']           = 'Không gửi email chào mừng';

$lang['clients_notes_table_description_heading'] = 'Mô tả';
$lang['clients_notes_table_addedfrom_heading']   = 'Được thêm từ';
$lang['clients_notes_table_dateadded_heading']   = 'Ngày thêm';
$lang['clients_list_full_name']   = 'Họ tên đầy đủ';
$lang['clients_list_last_login']  = 'Đăng nhập lần cuối lúc';

# Contracts
$lang['contracts']                = 'Hợp đồng';
$lang['contract']                 = 'Hợp đồng';
$lang['new_contract']             = 'Hợp đồng mới';
$lang['contract_lowercase']       = 'hợp đồng';
$lang['contract_start_date']      = 'Ngày bắt đầu';
$lang['contract_end_date']        = 'Ngày kết thúc';
$lang['contract_subject']         = 'Chủ đề';
$lang['contract_description']     = 'Mô tả';
$lang['contract_subject_tooltip'] = 'Khách hàng cũng sẽ nhìn thấy chủ đề này';
$lang['contract_client_string']   = 'Khách hàng';
$lang['contract_attach']          = 'Tài liệu đính kèm';

$lang['contract_list_client']     = 'Khách hàng';
$lang['contract_list_subject']    = 'Chủ đề';
$lang['contract_list_start_date'] = 'Ngày bắt đầu';
$lang['contract_list_end_date']   = 'Ngày kết thúc';

# Currencies
$lang['currencies']           = 'Currencies';
$lang['currency']             = 'Currency';
$lang['new_currency']         = 'New Currency';
$lang['currency_lowercase']   = 'currency';
$lang['base_currency_set']    = 'This is now your base currency.';
$lang['make_base_currency']   = 'Make base currency';
$lang['base_currency_string'] = 'Base Currency';

$lang['currency_list_name']   = 'Name';
$lang['currency_list_symbol'] = 'Symbol';


$lang['currency_add_edit_description'] = 'Currency Code';
$lang['currency_add_edit_rate']        = 'Symbol';

$lang['currency_edit_heading'] = 'Edit Currency';
$lang['currency_add_heading']  = 'Add New Currency';


# Department
$lang['departments']          = 'Phòng ban';
$lang['department']           = 'Phòng ban';
$lang['new_department']       = 'Phòng ban mới';
$lang['department_lowercase'] = 'phòng ban';

$lang['department_name']             = 'Tên của phòng ban';
$lang['department_email']            = 'Email phòng ban';
$lang['department_hide_from_client'] = 'Ẩn với khách?';
$lang['department_list_name']        = 'Tên';

# Email Templates
$lang['email_templates']                        = 'Email mẫu';
$lang['email_template']                         = 'Email mẫu';
$lang['email_template_lowercase']               = 'email mẫu';
$lang['email_templates_lowercase']              = 'email mẫu';
$lang['email_template_ticket_fields_heading']   = 'Yêu cầu hỗ trợ';
$lang['email_template_invoices_fields_heading'] = 'Hóa đơn';
$lang['email_template_clients_fields_heading']  = 'Khách hàng';

$lang['template_name']                                      = 'Tên mẫu';
$lang['template_subject']                                   = 'Chủ đề mẫu';
$lang['template_fromname']                                  = 'Người gửi';
$lang['template_fromemail']                                 = 'Email người gửi';
$lang['send_as_plain_text']                                 = 'Gửi như văn bản thường';
$lang['email_template_disabled']                             = 'Khóa lại';
$lang['email_template_email_message']                       = 'Nội dung email';
$lang['available_merge_fields']                             = 'Những trường đại diện sẵn có';
# Home
$lang['dashboard_string']                                   = 'Bảng tin';
$lang['home_latest_todos']                                  = 'Nhắc việc gần đây';
$lang['home_no_latest_todos']                               = 'Không có ghi chú nhắc việc';
$lang['home_latest_finished_todos']                         = 'Việc vừa hoàn thành';
$lang['home_no_finished_todos_found']                       = 'Không tìm thấy việc đã hoàn thành';
$lang['home_todo_heading']                                  = 'Ghi chú nhắc việc';
$lang['home_tickets_awaiting_reply_by_department']          = 'Yêu cầu đang chờ phản hồi theo phòng ban';
$lang['home_tickets_awaiting_reply_by_status']              = 'Yêu cầu đang chờ phản hồi theo trạng thái';
$lang['home_this_week_events']                              = 'Sự kiện tuần này';
$lang['home_upcoming_events_next_week']                     = 'Sự kiện tuần tới';
$lang['home_event_added_by']                                = 'Sự kiện được thêm bởi';
$lang['home_public_event']                                  = 'Sự kiện công khai';
$lang['home_weekly_payment_records']                        = 'Báo cáo thu chi hàng tuần';
$lang['home_weekend_ticket_opening_statistics']             = 'Thống kê yêu cầu hỗ trợ hàng tuần';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Chia sẻ tài liệu, ý tưởng, ...';
$lang['new_post']                                           = 'Đăng bài';
$lang['newsfeed_upload_tooltip']                            = 'Mẹo: kéo thả tập tin để tải lên';
$lang['newsfeed_all_departments']                           = 'Tất cả phòng ban';
$lang['newsfeed_pin_post']                                  = 'Ghim bài đăng';
$lang['newsfeed_unpin_post']                                = 'Tháo ghim';
$lang['newsfeed_delete_post']                               = 'Xóa';
$lang['newsfeed_published_post']                            = 'Đăng';
$lang['newsfeed_you_like_this']                             = 'Bạn thích điều này';
$lang['newsfeed_like_this']                                 = 'thích';
$lang['newsfeed_one_other']                                 = 'khác';
$lang['newsfeed_you']                                       = 'Bạn';
$lang['newsfeed_and']                                       = 'và';
$lang['newsfeed_you_and']                                   = 'Bạn và';
$lang['newsfeed_like_this_saying']                          = 'Thích';
$lang['newsfeed_unlike_this_saying']                        = 'Bỏ thích';
$lang['newsfeed_show_more_comments']                        = 'Xem thêm bình luận';
$lang['comment_this_post_placeholder']                      = 'Bình luận vào bài đăng này...';
$lang['newsfeed_post_likes_modal_heading']                  = 'Những đồng nghiệp thích bài đăng này';
$lang['newsfeed_comment_likes_modal_heading']               = 'Những đồng nghiệp thích bình luận này';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Bài đăng chỉ hiển thị với những phòng ban sau: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Các yếu tố trong hóa đơn';
$lang['invoice_item']                                       = 'Yếu tố trong hóa đơn';
$lang['new_invoice_item']                                   = 'Yếu tố mới';
$lang['invoice_item_lowercase']                             = 'yếu tố trong hóa đơn';

$lang['invoice_items_list_description'] = 'Mô tả';
$lang['invoice_items_list_rate']        = 'Giá';
$lang['invoice_items_list_tax']         = 'Thuế';

$lang['invoice_item_add_edit_description'] = 'Mô tả';
$lang['invoice_item_add_edit_rate']        = 'Giá';
$lang['invoice_item_add_edit_tax']         = 'Thuế';
$lang['invoice_item_add_edit_tax_select']  = 'Chọn loại thuế';

$lang['invoice_item_edit_heading'] = 'Chỉnh sửa';
$lang['invoice_item_add_heading']  = 'Thêm mục mới';

# Invoices


$lang['invoices']                       = 'Hóa đơn';
$lang['invoice']                        = 'Hóa đơn';
$lang['invoice_lowercase']              = 'hóa đơn';
$lang['create_new_invoice']             = 'Tạo hóa đơn mới';
$lang['view_invoice']                   = 'Xem chi tiết hóa đơn';

$lang['invoice_payment_recorded']       = 'Đã ghi lại thanh toán hóa đơn';
$lang['invoice_payment_record_failed']  = 'Ghi lại thanh toán không thành công';
$lang['invoice_sent_to_client_success'] = 'Hóa đơn được gửi đến khách hàng thành công';
$lang['invoice_sent_to_client_fail']    = 'Có vấn đề xảy ra trong khi gửi hóa đơn';
$lang['invoice_reminder_send_problem']  = 'Có vấn đề xảy ra trong khi gửi nhắc nhở thanh toán';
$lang['invoice_overdue_reminder_sent']  = 'Nhắc nhở thanh toán đã gửi đi thành công';

$lang['invoice_details']              = 'Chi tiết hóa đơn';
$lang['invoice_view']                 = 'Xem hóa đơn';
$lang['invoice_select_customer']      = 'Khách hàng';
$lang['invoice_add_edit_number']      = 'Số hóa đơn';
$lang['invoice_add_edit_date']        = 'Ngày xuất';
$lang['invoice_add_edit_duedate']     = 'Hạn trả';
$lang['invoice_add_edit_currency']    = 'Đơn vị tiền';
$lang['invoice_add_edit_client_note'] = 'Ghi chú của khách hàng';
$lang['invoice_add_edit_admin_note']  = 'Ghi chú của admin';

$lang['invoice_add_edit_search_item']  = 'Tìm kiếm';
$lang['invoices_toggle_table_tooltip'] = 'Bật/tắt danh sách';

$lang['edit_invoice_tooltip']                   = 'Chỉnh sửa hóa đơn';
$lang['delete_invoice_tooltip']                 = 'Xóa hóa đơn. Lưu ý: Tất cả thanh toán thuộc hóa đơn này cũng sẽ bị xóa (nếu có).';
$lang['invoice_sent_to_email_tooltip']          = 'Gửi vào email';
$lang['invoice_already_send_to_client_tooltip'] = 'Hóa đơn này đã được gửi đến khách hàng %s';
$lang['send_overdue_notice_tooltip']            = 'Gửi thông báo quá hạn';
$lang['invoice_view_activity_tooltip']          = 'Nhật ký hoạt động';
$lang['invoice_record_payment']                 = 'Ghi lại thanh toán';

$lang['invoice_send_to_client_modal_heading']    = 'Gửi hóa đơn đến khách hàng';
$lang['invoice_send_to_client_attach_pdf']       = 'Đính kèm file DPF cho hóa đơn';
$lang['invoice_send_to_client_preview_template'] = 'Xem trước email mẫu';

$lang['invoice_dt_table_heading_number']  = 'Hóa đơn #';
$lang['invoice_dt_table_heading_date']    = 'Ngày xuất';
$lang['invoice_dt_table_heading_client']  = 'Khách hàng';
$lang['invoice_dt_table_heading_duedate'] = 'Hạn trả';
$lang['invoice_dt_table_heading_amount']  = 'Tổng cộng';
$lang['invoice_dt_table_heading_status']  = 'Trạng thái';

$lang['record_payment_for_invoice']              = 'Ghi lại thanh toán cho';
$lang['record_payment_amount_received']          = 'Số tiền nhận được';
$lang['record_payment_date']                     = 'Ngày thanh toán';
$lang['record_payment_leave_note']               = 'Để lại ghi chú';
$lang['invoice_payments_received']               = 'Thanh toán đã nhận';
$lang['invoice_record_payment_note_placeholder'] = 'Ghi chú của admin';
$lang['no_payments_found']                       = 'Chưa có thanh toán nào được thực hiện cho hóa đơn này';
$lang['invoice_email_link_text']                 = 'Xem hóa đơn';

# Payments
$lang['payments']                             = 'Thanh toán';
$lang['payment']                              = 'Thanh toán';
$lang['payment_lowercase']                    = 'thanh toán';
$lang['payments_table_number_heading']        = 'Thanh toán #';
$lang['payments_table_invoicenumber_heading'] = 'Hóa đơn #';
$lang['payments_table_mode_heading']          = 'Hình thức thanh toán';
$lang['payments_table_date_heading']          = 'Ngày xuất';
$lang['payments_table_amount_heading']        = 'Tổng cộng';
$lang['payments_table_client_heading']        = 'Khách hàng';
$lang['payment_not_exists']                   = 'Thanh toán này không tồn tại';

$lang['payment_edit_for_invoice']     = 'Thanh toán cho hóa đơn';
$lang['payment_edit_amount_received'] = 'Số tiền nhận được';
$lang['payment_edit_date']            = 'Ngày thực hiện thanh toán';
$lang['payment_edit_lave_note']       = 'Để lại ghi chú';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Chủ đề';
$lang['kb_article_add_edit_group']   = 'Phân nhóm';
$lang['kb_string']                   = 'Kiến thức chuyên môn';
$lang['kb_article']                  = 'Bài viết';
$lang['kb_article_lowercase']        = 'bài viết';
$lang['kb_article_new_article']      = 'Bài viết mới';
$lang['kb_article_disabled']         = 'Ẩn';
$lang['kb_article_description']      = 'Mô tả bài viết';

$lang['kb_table']                      = 'Danh sách';
$lang['kb_no_articles_found']          = 'Không tìm thấy bài viết KTCM nào';
$lang['kb_dt_article_name']            = 'Tựa đề bài viết';
$lang['kb_dt_group_name']              = 'Phân nhóm';
$lang['new_group']                     = 'Tạo phân nhóm mới';
$lang['kb_group_add_edit_name']        = 'Tên phân nhóm';
$lang['kb_group_add_edit_description'] = 'Mô tả ngắn';
$lang['kb_group_add_edit_disabled']    = 'Ẩn';
$lang['kb_group_add_edit_note']        = 'Lưu ý: Tất cả bài viết trong nhóm này sẽ bị ẩn đi nếu tick chọn mục Ẩn';
$lang['group_table_name_heading']      = 'Tên gọi';
$lang['group_table_isactive_heading']  = 'Kích hoạt';
$lang['kb_no_groups_found']            = 'Không tìm thấy phân nhóm nào';

# Mail Lists
$lang['mail_lists']                           = 'Danh sách thư';
$lang['mail_list']                            = 'Danh sách thư';
$lang['new_mail_list']                        = 'Danh sách thư mới';
$lang['mail_list_lowercase']                  = 'danh sách thư';
$lang['custom_field_deleted_success']         = 'Đã xóa trường tự tạo';
$lang['custom_field_deleted_fail']            = 'Xảy ra trục trặc khi đang xóa trường tự tạo';
$lang['email_removed_from_list']              = 'Email đã được xóa khỏi danh sách';
$lang['email_remove_fail']                    = 'Email chưa được xóa thành công';
$lang['staff_mail_lists']                     = 'Danh sách thư của nhân viên';
$lang['clients_mail_lists']                   = 'Danh sách thư của khách hàng';
$lang['mail_list_total_imported']             = 'Tổng số email nhập vào: %s';
$lang['mail_list_total_duplicate']            = 'Tổng số thư được sao chép: %s';
$lang['mail_list_total_failed_to_insert']     = 'Tổng số email chèn vào không thành công: %s';
$lang['mail_list_total_invalid']              = 'Địa chỉ email không tồn tại: %s';
$lang['cant_edit_mail_list']                  = 'Bạn không có quyền chỉnh sửa danh sách này, danh sách được cố định tự động';
$lang['mail_list_add_edit_name']              = 'Tên danh sách thư';
$lang['mail_list_add_edit_customfield']       = 'Thêm mục mới';
$lang['mail_lists_viewing_emails']            = 'Đang xem email từ danh sách';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Ngày thêm vào';
$lang['add_new_email_to']                     = 'Thêm email mới vào %s';
$lang['import_emails_to']                     = 'Nhập email vào %s';
$lang['mail_list_new_email_edit_add_label']   = 'Email';
$lang['mail_list_import_file']                = 'Thêm tập tin';
$lang['mail_list_available_custom_fields']    = 'Các mục đã tạo';
$lang['submit_import_emails']                 = 'Nhập email';
$lang['btn_import_emails']                    = 'Nhập email (Excel)';
$lang['btn_add_email_to_list']                = 'Thêm email vào danh sách này';
$lang['mail_lists_dt_list_name']              = 'Tên danh sách';
$lang['mail_lists_dt_datecreated']            = 'Ngày tạo';
$lang['mail_lists_dt_creator']                = 'Người tạo';
$lang['email_added_to_mail_list_successfully'] = 'Email đã được thêm';
$lang['email_is_duplicate_mail_list']         = 'Email đã có trong danh sách';

# Media
$lang['media_files']            = 'Tập tin';

# Payment modes
$lang['new_payment_mode']       = 'Hình thức thanh toán mới';
$lang['payment_modes']          = 'Các hình thức thanh toán';
$lang['payment_mode']           = 'Hình thức thanh toán';
$lang['payment_mode_lowercase'] = 'hình thức thanh toán';
$lang['payment_modes_dt_name']  = 'Tên gọi hình thức thanh toán';

$lang['payment_mode_add_edit_name'] = 'Tên gọi hình thức thanh toán';
$lang['payment_mode_edit_heading']  = 'Sửa hình thức thanh toán';
$lang['payment_mode_add_heading']   = 'Thêm hình thức thanh toán mới';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Mẫu phản hồi mới';
$lang['predefined_replies']                = 'Các mẫu phản hồi';
$lang['predefined_reply']                  = 'Mẫu phản hồi';
$lang['predefined_reply_lowercase']        = 'mẫu phản hồi';
$lang['predefined_replies_dt_name']        = 'Tên gọi mẫu phản hồi';
$lang['predefined_reply_add_edit_name']    = 'Tên gọi mẫu phản hồi';
$lang['predefined_reply_add_edit_content'] = 'Nội dung';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Quyền ưu tiên mới';
$lang['ticket_priorities']             = 'Quyền ưu tiên hỗ trợ';
$lang['ticket_priority']               = 'Quyền ưu tiên hỗ trợ';
$lang['ticket_priority_lowercase']     = 'quyền ưu tiên hỗ trợ';
$lang['no_ticket_priorities_found']    = 'Không tìm thấy quyền ưu tiên nào';
$lang['ticket_priority_dt_name']       = 'Tên gọi quyền ưu tiên hỗ trợ';
$lang['ticket_priority_add_edit_name'] = 'Tên gọi quyền ưu tiên';

# Reports
$lang['kb_reports']                         = 'Báo cáo KTCM';
$lang['sales_reports']                      = 'Báo cáo doanh số';
$lang['reports_choose_kb_group']            = 'Chọn phân nhóm';
$lang['reports_sales_select_report_type']   = 'Chọn kiểu báo cáo';
$lang['report_kb_yes']                      = 'Có';
$lang['report_kb_no']                       = 'Không';
$lang['report_kb_no_votes']                 = 'Chưa được bỏ phiếu';
$lang['report_this_week_leads_conversions'] = 'Người liên hệ mục tiêu của tuần';
$lang['report_leads_sources_conversions']   = 'Người tìm nguồn khách';
$lang['report_leads_monthly_conversions']   = 'Theo tháng';
$lang['sales_report_heading']               = 'Báo cáo doanh số';
$lang['report_sales_type_income']           = 'Tổng số thu nhập';

$lang['report_sales_type_customer']                    = 'Báo cáo khách hàng';
$lang['report_sales_base_currency_select_explanation'] = 'Bạn phải chọn đơn vị tiền trao đổi vì các hóa đơn của bạn có đơn vị tiền khác nhau';
$lang['report_sales_from_date']                        = 'Từ ngày';
$lang['report_sales_to_date']                          = 'Đến ngày';


$lang['report_sales_months_all_time']      = 'Từ trước đến nay';
$lang['report_sales_months_six_months']    = '6 tháng qua';
$lang['report_sales_months_twelve_months'] = '12 tháng qua';
$lang['report_sales_months_custom']        = 'Tùy chỉnh';
$lang['reports_sales_generated_report']    = 'Báo cáo đã xuất trình';



$lang['reports_sales_dt_customers_client']                = 'Khách hàng';
$lang['reports_sales_dt_customers_total_invoices']        = 'Tất cả hóa đơn';
$lang['reports_sales_dt_items_customers_amount']          = 'Tổng cộng';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Đã cộng thuế';

# Roles
$lang['new_role']           = 'Vị trí mới';
$lang['all_roles']          = 'Tất cả vị trí';
$lang['roles']              = 'Vị trí nhân viên';
$lang['role']               = 'Vị trí';
$lang['role_lowercase']     = 'vị trí';
$lang['roles_total_users']  = 'Tất cả thành viên: ';
$lang['roles_dt_name']      = 'Tên vị trí';
$lang['role_add_edit_name'] = 'Tên vị trí';

# Service
$lang['new_service']           = 'Dịch vụ mới';
$lang['services']              = 'Dịch vụ';
$lang['service']               = 'Dịch vụ';
$lang['service_lowercase']     = 'dịch vụ';
$lang['services_dt_name']      = 'Tên dịch vụ';
$lang['service_add_edit_name'] = 'Tên dịch vụ';

# Settings
$lang['settings']                     = 'Cài đặt';
$lang['settings_updated']             = 'Đã cập nhật cài đặt';
$lang['settings_save']                = 'Lưu lại cài đặt';
$lang['settings_group_general']       = 'Tổng quan';
$lang['settings_group_localization']  = 'Ngôn ngữ và thời gian';
$lang['settings_group_tickets']       = 'Yêu cầu hỗ trợ';
$lang['settings_group_sales']         = 'Tài chính';
$lang['settings_group_email']         = 'Email';
$lang['settings_group_clients']       = 'Khách hàng';
$lang['settings_group_newsfeed']      = 'Tin mới';
$lang['settings_group_cronjob']       = 'Email chu kì/Cron Job';

$lang['settings_yes']                                        = 'Có';
$lang['settings_no']                                         = 'Không';
$lang['settings_clients_default_theme']                      = 'Nền tảng mặc định của khách hàng';
$lang['settings_clients_allow_registration']                 = 'Cho phép khách hàng đăng kí';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Cho phép xem bài viết KTCM không cần đăng kí';

$lang['settings_cron_send_overdue_reminder']                 = 'Gửi nhắc nhở hóa đơn quá hạn';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Thiết lập Cron Job gửi email nhắc nhở cho khách hàng khi hóa đơn chuyển sang trạng thái quá hạn';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Tự động gửi nhắc nhở sau (ngày)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Tự động gửi lại nhắc nhở sau (ngày)';

$lang['settings_email_host']      = 'Máy chủ SMTP';
$lang['settings_email_port']      = 'Cổng SMTP';
$lang['settings_email']           = 'Email SMTP';
$lang['settings_email_password']  = 'Mật khẩu SMTP';
$lang['settings_email_charset']   = 'Email Charset';
$lang['settings_email_signature'] = 'Chữ kí email';

$lang['settings_general_company_logo']                = 'Logo công ty';
$lang['settings_general_company_logo_tooltip']        = 'Kích thước khuyến nghị: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Gỡ logo công ty';
$lang['settings_general_company_name']                = 'Tên công ty';
$lang['settings_general_company_main_domain']         = 'Tên miền chính của công ty';
$lang['settings_general_use_knowledgebase']           = 'Sử dụng Kiến thức chuyên môn';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Nếu bạn kích hoạt cài đặt này, KTCM cũng sẽ hiển thị với bên khách hàng';
$lang['settings_general_tables_limit']                = 'Giới hạn đánh số trang cho danh sách';
$lang['settings_general_default_staff_role']          = 'Vị trí nhân viên mặc định';
$lang['settings_general_default_staff_role_tooltip']  = 'Khi bạn thêm nhân viên mới, vị trí này sẽ được chọn làm mặc định';

$lang['settings_localization_date_format']      = 'Định dạng ngày';
$lang['settings_localization_default_timezone'] = 'Múi giờ mặc định';
$lang['settings_localization_default_language'] = 'Ngôn ngữ mặc định';


$lang['settings_newsfeed_max_file_upload_post']    = 'Số tập tin tối đa có thể đăng trong bài';
$lang['settings_newsfeed_max_file_size']           = 'Dung lượng tập tin tối đa (MB)';

$lang['settings_reminders_contracts']         = 'Nhắc nhở hết thời hạn hợp đồng trước';
$lang['settings_reminders_contracts_tooltip'] = 'Thông báo hết thời hạn hợp đồng trong ngày';

$lang['settings_tickets_use_services']             = 'Sử dụng dịch vụ';
$lang['settings_tickets_max_attachments']          = 'Số yêu cầu tối đa có thể đính kèm';
$lang['settings_tickets_allow_departments_access'] = 'Chỉ cho phép nhân viên truy cập vào những yêu cầu thuộc về phòng ban đó';
$lang['settings_tickets_allowed_file_extensions']  = 'Các định dạng tập tin đính kèm được cho phép';

$lang['settings_sales_general']                                    = 'Tổng quan';
$lang['settings_sales_general_note']                               = 'Cài đặt chung';
$lang['settings_sales_invoice_prefix']                             = 'Tiền tố thứ tự của hóa đơn';
$lang['settings_sales_decimal_separator']                          = 'Dấu phân cách hàng thập phân';
$lang['settings_sales_thousand_separator']                         = 'Dấu phân cách hàng nghìn';
$lang['settings_sales_currency_placement']                         = 'Cách đặt đơn vị tiền';
$lang['settings_sales_currency_placement_before']                  = 'Trước số tiền';
$lang['settings_sales_currency_placement_after']                   = 'Sau số tiền';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Yêu cầu khách hàng đăng nhập để xem hóa đơn';
$lang['settings_sales_next_invoice_number']                        = 'Số hóa đơn kế tiếp';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Nhập 1 vào mục này nếu bạn muốn tiến hành từ đầu';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Tự động giảm số thứ tự khi có hóa đơn bị xóa';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Bạn có muốn hạ số thứ tự cho hóa đơn khi có hóa đơn trước nó bị xóa? Ví dụ: Nếu chọn Có thì số hóa đơn kế tiếp là 15 sẽ tự động lùi xuống 14. Nếu chọn Không thì vẫn sẽ là 15. Nếu bạn chỉ đặt Không cho hóa đơn trước thì nên đặt Không cho cả hóa đơn này để số hóa đơn kế tiếp không bị lùi xuống.';
$lang['settings_sales_invoice_number_format']                      = 'Định dạng số hóa đơn';
$lang['settings_sales_invoice_number_format_year_based']           = 'Hệ năm';
$lang['settings_sales_invoice_number_format_number_based']         = 'Hệ số (000001)';


$lang['settings_sales_company_info_note']    = 'Các thông tin này sẽ được hiển thị trên hóa đơn/báo giá/thanh toán và các văn bản PDF khác có yêu cầu thông tin công ty';
$lang['settings_sales_company_name']         = 'Yên công ty';
$lang['settings_sales_address']              = 'Địa chỉ';
$lang['settings_sales_city']                 = 'Thành phố';
$lang['settings_sales_country_code']         = 'Mã quốc gia';
$lang['settings_sales_postal_code']          = 'Mã bưu chính';
$lang['settings_sales_phonenumber']          = 'Điện thoại';

# Leads
$lang['new_lead']       = 'Khách tìm năng mới';
$lang['leads']          = 'Khách tìm năng';
$lang['lead']           = 'Khách tìm năng';
$lang['lead_lowercase'] = 'Khách tìm năng';
$lang['leads_all']      = 'Tất cả';

$lang['leads_canban_notes']  = 'Ghi chú: %s';
$lang['leads_canban_source'] = 'Nguồn khách: %s';

$lang['lead_new_source']            = 'Nguồn khách mới';
$lang['lead_sources']               = 'Nguồn';
$lang['lead_source']                = 'Nguồn';
$lang['lead_source_lowercase']      = 'nguồn';
$lang['leads_sources_not_found']    = 'Không tìm thấy nguồn khách nào';
$lang['leads_sources_table_name']   = 'Tên nguồn';
$lang['leads_source_add_edit_name'] = 'Tên nguồn';

$lang['lead_new_status']         = 'Trạng thái mục tiêu';
$lang['lead_statuss']            = 'Trạng thái mục tiêu';
$lang['lead_status']             = 'Trạng thái mục tiêu';
$lang['lead_status_lowercase']   = 'trạng thái mục tiêu';
$lang['leads_status_table_name'] = 'Tên trạng thái';

$lang['leads_status_add_edit_name']  = 'Tên trạng thái';
$lang['leads_status_add_edit_order'] = 'Thứ tự';

$lang['lead_statuses_not_found']      = 'Không tìm thấy trạng thái mục tiêu nào';
$lang['leads_search']                 = 'Tìm Khách tìm năng';

$lang['leads_table_total'] = 'Tổng số mục tiêu: %s';

$lang['leads_dt_name']         = 'Tên';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Điện thoại';
$lang['leads_dt_assigned']     = 'Người tạo';
$lang['leads_dt_status']       = 'Trạng thái';
$lang['leads_dt_last_contact'] = 'Lần liên hệ cuối';

$lang['lead_add_edit_name']                 = 'Tên';
$lang['lead_add_edit_email']                = 'Địa chỉ email';
$lang['lead_add_edit_phonenumber']          = 'Điện thoại';
$lang['lead_add_edit_source']               = 'Nguồn';
$lang['lead_add_edit_status']               = 'Trạng thái Khách tìm năng';
$lang['lead_add_edit_assigned']             = 'Người tạo';
$lang['lead_add_edit_datecontacted']        = 'Ngày liên hệ';
$lang['lead_add_edit_contacted_today']      = 'Đã liên hệ hôm nay';
$lang['lead_add_edit_activity']             = 'Nhật ký hoạt động';
$lang['lead_add_edit_notes']                = 'Ghi chú';
$lang['lead_add_edit_add_note']             = 'Thêm ghi chú';
$lang['lead_not_contacted']                 = 'Tôi chưa liên hệ mục tiêu này';
$lang['lead_add_edit_contacted_this_lead']  = 'Tôi đã liên hệ mục tiêu này';
$lang['lead_confirmation_canban_contacted'] = 'Bạn đã liên hệ mục tiêu này chưa?';
# Misc
$lang['access_denied']              = 'Truy cập bị từ chối';
$lang['prev']                       = 'Lùi lại';
$lang['next']                       = 'Đi tới';

# Datatables
$lang['dt_paginate_first']          = 'Đầu';
$lang['dt_paginate_last']           = 'Cuối';
$lang['dt_paginate_next']           = 'Đi tới';
$lang['dt_paginate_previous']       = 'Lùi lại';
$lang['dt_empty_table']             = 'Không tìm thấy {0}';
$lang['dt_search']                  = 'Tìm kiếm...';
$lang['dt_zero_records']            = 'Không tìm thấy báo cáo trùng khớp nào';
$lang['dt_loading_records']         = 'Đang tải...';
$lang['dt_length_menu']             = 'Hiển thị mục _MENU_';
$lang['dt_info_filtered']           = '(được lọc từ _MAX_ trong tổng số {0})';
$lang['dt_info_empty']              = 'Hiển thị từ 0 đến 0 của 0 {0}';
$lang['dt_info']                    = 'Hiển thị từ _START_ đến _END_ của _TOTAL_ {0}';
$lang['dt_empty_table']             = 'Không tìm thấy {0}';
$lang['dt_sort_ascending']          = ' kích hoạt để sắp xếp từ dưới lên';
$lang['dt_sort_descending']         = ' kích hoạt để sắp xếp từ trên xuống';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s đã gửi nhắc nhở hóa đơn quá hạn';

# Weekdays
$lang['wd_monday']    = 'Thứ hai';
$lang['wd_tuesday']   = 'Thứ ba';
$lang['wd_thursday']  = 'Thứ năm';
$lang['wd_wednesday'] = 'Thứ tư';
$lang['wd_friday']    = 'Thứ sáu';
$lang['wd_saturday']  = 'Thứ bảy';
$lang['wd_sunday']    = 'Chủ nhật';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Bảng tin';
$lang['als_clients']   = 'Khách hàng';
$lang['als_leads']     = 'Khách tìm năng';

$lang['als_contracts'] = 'Hợp đồng';

$lang['als_all_tickets'] = 'Tất cả yêu cầu';
$lang['als_sales']       = 'Doanh số';

$lang['als_staff'] = 'Nhân viên';
$lang['als_tasks'] = 'Công việc';
$lang['als_kb']    = 'Kiến thức';

$lang['als_surveys']               = 'Thăm dò';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Báo cáo';
$lang['als_reports_sales_submenu'] = 'Doanh số';
$lang['als_reports_leads_submenu'] = 'Khách hàng mục tiêu';
$lang['als_kb_articles_submenu']   = 'Kiến thức chuyên môn';
$lang['als_utilities']             = 'Tiện ích';
$lang['als_announcements_submenu'] = 'Thông báo';
$lang['als_mail_lists_submenu']    = 'Danh sách thư';
$lang['als_calendar_submenu']      = 'Lịch';
$lang['als_activity_log_submenu']  = 'Nhật ký hoạt động';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Yêu cầu hỗ trợ';
$lang['acs_ticket_priority_submenu']           = 'Độ ưu tiên của yêu cầu';
$lang['acs_ticket_statuses_submenu']           = 'Trạng thái yêu cầu';
$lang['acs_ticket_predefined_replies_submenu'] = 'Phản hồi soạn sẵn';
$lang['acs_ticket_services_submenu']           = 'Dịch vụ';
$lang['acs_departments']                       = 'Phòng ban';
$lang['acs_leads']                             = 'Leads';
$lang['acs_leads_sources_submenu']             = 'Nguồn';
$lang['acs_leads_statuses_submenu']            = 'Trạng thái';
$lang['acs_sales_taxes_submenu']               = 'Tỉ giá thuế';
$lang['acs_sales_currencies_submenu']          = 'Đơn vị tiền';
$lang['acs_sales_payment_modes_submenu']       = 'Phương thức thanh toán';
$lang['acs_email_templates']                   = 'Email mẫu';
$lang['acs_roles']                             = 'Vị trí';
$lang['acs_settings']                          = 'Cài đặt';

# Tickets
$lang['new_ticket']                                         = 'Yêu cầu chưa giải quyết mới';
$lang['tickets']                                            = 'Yêu cầu';
$lang['ticket']                                             = 'Yêu cầu';
$lang['ticket_lowercase']                                   = 'yêu cầu';
$lang['support_tickets']                                    = 'Yêu cầu trợ giúp';
$lang['support_ticket']                                     = 'Yêu cầu trợ giúp';
$lang['ticket_settings_to']                                 = 'Đến';
$lang['ticket_settings_email']                              = 'Địa chỉ email';
$lang['ticket_settings_departments']                        = 'Phòng ban';
$lang['ticket_settings_service']                            = 'Dịch vụ';
$lang['ticket_settings_priority']                           = 'Mức độ ưu tiên';
$lang['ticket_settings_subject']                            = 'Chủ đề';
$lang['ticket_settings_assign_to']                          = 'Chỉ định yêu cầu (mặc định là người dùng hiện tại)';
$lang['ticket_settings_assign_to_you']                      = 'Bạn';
$lang['ticket_settings_select_client']                      = 'Chọn khách hàng';
$lang['ticket_add_body']                                    = 'Nội dung yêu cầu';
$lang['ticket_add_attachments']                             = 'Đính kèm';
$lang['ticket_no_reply_yet']                                = 'Chưa có phản hồi';
$lang['new_ticket_added_successfully']                        = 'Đã thêm yêu cầu hỗ trợ #%s thành công';
$lang['replied_to_ticket_successfully']                       = 'Đã phản hồi yêu cầu #%s thành công';
$lang['ticket_settings_updated_successfully']                = 'Cập nhật thành công cài đặt cho yêu cầu';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Cài đặt cho yêu cầu cập nhật thành công - chỉ định lại cho phòng ban %s';
$lang['ticket_dt_subject']                                  = 'Chủ đề';
$lang['ticket_dt_department']                               = 'Phòng ban';
$lang['ticket_dt_service']                                  = 'Dịch vụ';
$lang['ticket_dt_submitter']                                = 'Khách hàng';
$lang['ticket_dt_status']                                   = 'Trạng thái';
$lang['ticket_dt_priority']                                 = 'Mức độ ưu tiên';
$lang['ticket_dt_last_reply']                               = 'Phản hồi lần cuối';

$lang['ticket_single_add_reply']                  = 'Thêm phản hồi';
$lang['ticket_single_add_note']                   = 'Thêm ghi chú';
$lang['ticket_single_other_user_tickets']         = 'Những yêu cầu khác';
$lang['ticket_single_settings']                   = 'Cài đặt';
$lang['ticket_single_priority']                   = 'Mức độ ưu tiên: %s';
$lang['ticket_single_last_reply']                 = 'Phản hồi lần cuối: %s';
$lang['ticket_single_change_status_top']          = 'Thay đổi trạng thái';
$lang['ticket_single_ticket_note_by']             = 'Ghi chú yêu cầu bởi %s';
$lang['ticket_single_note_added']                 = 'Ghi chú đã thêm: %s';
$lang['ticket_single_change_status']              = 'Thay đổi trạng thái';
$lang['ticket_single_assign_to_me_on_update']     = 'Tự động chỉ định yêu cầu này cho tôi';
$lang['ticket_single_insert_predefined_reply']    = 'Chèn câu trả lời đã tạo trước';
$lang['ticket_single_insert_knowledge_base_link'] = 'Chèn liên kết bài viết KTCM';
$lang['ticket_single_attachments']                = 'Tập tin đính kèm';
$lang['ticket_single_add_response']               = 'Thêm câu trả lời';
$lang['ticket_single_note_heading']               = 'Ghi chú';
$lang['ticket_single_add_note']                   = 'Thêm ghi chú';
$lang['ticket_settings_none_assigned']            = 'Không';
$lang['ticket_status_changed_successfully']        = 'Đã thay đổi trạng thái yêu cầu';
$lang['ticket_status_changed_fail']               = 'Xảy ra trục trặc trong khi đổi trạng thái yêu cầu';

$lang['ticket_staff_string']                    = 'Nhân viên';
$lang['ticket_client_string']                   = 'Khách hàng';
$lang['ticket_posted']                          = 'Đã đăng: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Chèn phản hồi đã tạo trước';
$lang['ticket_kb_link_heading']                 = 'Chèn liên kết bài viết KTCM';
$lang['ticket_access_by_department_denied']     = 'Bạn không có quyền truy cập yêu cầu này. Yêu cầu được chỉ định cho phòng ban không thuộc thẩm quyền của bạn.';

# Staff
$lang['new_staff']                       = 'Nhân viên mới';
$lang['staff_members']                   = 'Nhân viên';
$lang['staff_member']                    = 'Nhân viên';
$lang['staff_member_lowercase']          = 'nhân viên';
$lang['staff_profile_updated']           = 'Tiểu sử của bạn đã được cập nhật';
$lang['staff_old_password_incorrect']     = 'Mật khẩu cũ của bạn không chính xác';
$lang['staff_password_changed']          = 'Mật khẩu của bạn đã được thay đổi';
$lang['staff_problem_changing_password'] = 'Xảy ra trục trặc khi đang đổi mật khẩu';
$lang['staff_profile_string']            = 'Tiểu sử';

$lang['staff_cant_remove_main_admin']          = 'Không thể gỡ bỏ vị trí người quản lý';
$lang['staff_cant_remove_yourself_from_admin'] = 'Bạn không thể tự gỡ bỏ vị trí người quản lý của mình';

$lang['staff_dt_name']       = 'Họ tên đầy đủ';
$lang['staff_dt_email']      = 'Email';
$lang['staff_dt_last_Login'] = 'Đăng nhập lần cuối vào';
$lang['staff_dt_active']     = 'Đang hoạt động';

$lang['staff_add_edit_firstname']             = 'Tên';
$lang['staff_add_edit_lastname']              = 'Họ';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Điện thoại';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Các phòng ban của thành viên';
$lang['staff_add_edit_role']                  = 'Vị trí';
$lang['staff_add_edit_permissions']           = 'Quyền hạn';
$lang['staff_add_edit_administrator']         = 'Người quản lý';
$lang['staff_add_edit_password']              = 'Mật khẩu';
$lang['staff_add_edit_password_note']         = 'Lưu ý: Nếu bạn can thiệp vào mục này, mật khẩu của thành viên sẽ bị thay đổi.';
$lang['staff_add_edit_password_last_changed'] = 'Thay mật khẩu lần cuối vào';
$lang['staff_add_edit_notes']                 = 'Ghi chú';
$lang['staff_add_edit_note_description']      = 'Mô tả ghi chú';

$lang['staff_notes_table_description_heading'] = 'Ghi chú';
$lang['staff_notes_table_addedfrom_heading']   = 'Được thêm từ';
$lang['staff_notes_table_dateadded_heading']   = 'Ngày thêm';

$lang['staff_admin_profile']         = 'Đây là tiểu sử của admin';
$lang['staff_profile_notifications'] = 'Thông báo';
$lang['staff_profile_departments']   = 'Các phòng ban';

$lang['staff_edit_profile_image']                     = 'Ảnh đại diện';
$lang['staff_edit_profile_your_departments']          = 'Phòng ban';
$lang['staff_edit_profile_change_your_password']      = 'Thay đổi mật khẩu';
$lang['staff_edit_profile_change_old_password']       = 'Mật khẩu cũ';
$lang['staff_edit_profile_change_new_password']       = 'Mật khẩu mới';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Nhập lại mật khẩu mới';

# Surveys
$lang['new_survey']                    = 'Thăm dò mới';
$lang['surveys']                       = 'Các cuộc thăm dò';
$lang['survey']                        = 'Thăm dò';
$lang['survey_lowercase']              = 'thăm dò';
$lang['survey_no_mail_lists_selected'] = 'Không có danh sách thư nào được chọn';
$lang['survey_send_success_note']      = 'Tất cả email thăm dò (%s) sẽ được gửi qua CRON';
$lang['survey_result']                 = 'Kết quả của cuộc thăm dò: %s';
$lang['question_string']               = 'Câu hỏi';
$lang['question_field_string']         = 'Mục';

$lang['survey_list_view_tooltip']         = 'Xem cuộc thăm dò';
$lang['survey_list_view_results_tooltip'] = 'Xem kết quả';

$lang['survey_add_edit_subject']                   = 'Tiêu đề cuộc thăm dò';
$lang['survey_add_edit_email_description']         = 'Mô tả thăm dò (mô tả email)';
$lang['survey_include_survey_link']                = 'Đính kèm liên kết cuộc thăm dò trong phần mô tả';
$lang['survey_available_mail_lists_custom_fields'] = 'Các mục đã tạo trong danh sách email';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Các mục đã tạo có thể dùng cho chỉnh sửa email.';
$lang['survey_add_edit_short_description_view']    = 'Mô tả ngắn (mô tả xem trước)';
$lang['survey_add_edit_from']                      = 'Từ (hiển thị trong email)';
$lang['survey_add_edit_redirect_url']              = 'Liên kết dẫn đến cuộc thăm dò';
$lang['survey_add_edit_red_url_note']              = 'Khi người dùng hoàn thành cuộc thăm dò sẽ được dẫn đến đâu (để trống nếu là liên kết trang này)';
$lang['survey_add_edit_disabled']                  = 'Khóa';
$lang['survey_add_edit_only_for_logged_in']        = 'Chỉ dành cho tài khoản đã đăng nhập (nhân viên, khách hàng)';
$lang['send_survey_string']                        = 'Gửi thăm dò';
$lang['survey_send_mail_list_clients']             = 'Khách hàng';
$lang['survey_send_mail_list_staff']               = 'Nhân viên';
$lang['survey_send_mail_lists_string']             = 'Danh sách thư';
$lang['survey_send_mail_lists_note_logged_in']     = 'Lưu ý: Nếu bạn gửi thăm dò cho danh sách thư thì phải bỏ tick Chỉ dành cho tài khoản đã đăng nhập';
$lang['survey_send_string']                        = 'Gửi';

$lang['survey_send_to_total']  = 'Gửi đến tất cả %s email';
$lang['survey_send_till_now']  = 'Đến thời điểm hiện tại';
$lang['survey_send_finished']  = 'Đã hoàn tất gửi thăm dò: %s';
$lang['survey_added_to_queue'] = 'Cuộc thăm dò này được thêm vào hàng chờ Cron trên %s';

$lang['survey_questions_string']          = 'Câu hỏi';
$lang['survey_insert_field']              = 'Thêm mục';
$lang['survey_field_checkbox']            = 'Ô đánh dấu';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Mục nhập';
$lang['survey_field_textarea']            = 'Khung nhập chữ';
$lang['survey_question_required']         = 'Bắt buộc';
$lang['survey_question_only_for_preview'] = 'Chỉ để duyệt trước';
$lang['survey_create_first']              = 'Bạn phải tạo cuộc thăm dò rồi mới đặt câu hỏi.';


$lang['survey_dt_name']               = 'Tên';
$lang['survey_dt_total_questions']    = 'Tổng số câu hỏi';
$lang['survey_dt_total_participants'] = 'Tổng số người tham gia';
$lang['survey_dt_date_created']       = 'Ngày tạo';
$lang['survey_dt_active']             = 'Có hiệu lực';

$lang['survey_text_questions_results'] = 'Kết quả câu hỏi dạng chữ';
$lang['survey_view_all_answers']       = 'Xem các câu trả lời';

# Staff Tasks
$lang['new_task']       = 'Phân công mới';
$lang['tasks']          = 'Phân công';
$lang['task']           = 'Phân công';
$lang['task_lowercase'] = 'phân công';
$lang['comment_string'] = 'Bình luận';

$lang['task_marked_as_complete'] = 'Phân công được đánh dấu hoàn thành';
$lang['task_follower_removed']   = 'Gỡ người theo dõi thành công';
$lang['task_assignee_removed']   = 'Gỡ người thi hành thành công';

$lang['task_no_assignees'] = 'Không có người thi hành cho phân công này';
$lang['task_no_followers'] = 'Không có người theo dõi cho phân công này';

$lang['task_list_all']            = 'Tất cả';
$lang['task_list_not_assigned']   = 'Chưa được phân công';
$lang['task_list_duedate_passed'] = 'Quá hạn';
$lang['tasks_dt_name']            = 'Tên';
$lang['task_single_priority']               = 'Mức độ ưu tiên';
$lang['task_single_start_date']             = 'Ngày bắt đầu';
$lang['task_single_due_date']               = 'Hạn chót';
$lang['task_single_finished']               = 'Đã hoàn thành';
$lang['task_single_mark_as_complete']       = 'Đánh dấu hoàn thành';
$lang['task_single_edit']                   = 'Sửa';
$lang['task_single_delete']                 = 'Xóa';
$lang['task_single_assignees']              = 'Người được phân công';
$lang['task_single_assignees_select_title'] = 'Ấn định cho';
$lang['task_single_followers']              = 'Người theo dõi';
$lang['task_single_followers_select_title'] = 'Thêm người theo dõi';
$lang['task_single_insert_media_link']      = 'Chèn liên kết media';
$lang['task_single_add_new_comment']        = 'Thêm bình luận';

$lang['task_add_edit_subject']     = 'Chủ đề';
$lang['task_add_edit_priority']    = 'Mức độ ưu tiên';
$lang['task_priority_low']         = 'Thấp';
$lang['task_priority_medium']      = 'Bình thường';
$lang['task_priority_high']        = 'Cao';
$lang['task_priority_urgent']      = 'Cấp bách';
$lang['task_add_edit_start_date']  = 'Ngày bắt đầu';
$lang['task_add_edit_due_date']    = 'Hạn chót';
$lang['task_add_edit_description'] = 'Mô tả công việc';

# Taxes
$lang['new_tax']       = 'Thuế mới';
$lang['taxes']         = 'Các loại thuế';
$lang['tax']           = 'Thuế';
$lang['tax_lowercase'] = 'thuế';
$lang['tax_dt_name']   = 'Tên loại thuế';
$lang['tax_dt_rate']   = 'Tỉ giá (phần trăm)';

$lang['tax_add_edit_name'] = 'Tên loại thuế';
$lang['tax_add_edit_rate'] = 'Tỉ giá thuế (phần trăm)';
$lang['tax_edit_title']    = 'Sửa thuế';
$lang['tax_add_title']     = 'Thêm thuế mới';

# Ticket Statuses
$lang['new_ticket_status']       = 'Trạng thái liên hệ hỗ trợ';
$lang['ticket_statuses']         = 'Trạng thái liên hệ hỗ trợ';
$lang['ticket_status']           = 'Trạng thái liên hệ hỗ trợ';
$lang['ticket_status_lowercase'] = 'trạng thái liên hệ hỗ trợ';

$lang['ticket_statuses_dt_name']      = 'Tên trạng thái';
$lang['no_ticket_statuses_found']     = 'Không tìm thấy trạng thái nào';
$lang['ticket_statuses_table_total']  = 'Tổng cộng %s';
$lang['ticket_status_add_edit_name']  = 'Tên trạng thái liên hệ hỗ trợ';
$lang['ticket_status_add_edit_color'] = 'Chọn màu';
$lang['ticket_status_add_edit_order'] = 'Thứ tự trạng thái';

# Todos
$lang['new_todo']                  = 'Nhắc việc mới';
$lang['my_todos']                  = 'Nhắc nhở công việc';
$lang['todo']                      = 'Nhắc nhở công việc';
$lang['todo_lowercase']            = 'nhắc việc';
$lang['todo_status_changed']       = 'Trạng thái nhắc việc đã được thay đổi';
$lang['todo_add_title']            = 'Thêm nhắc nhở công việc';
$lang['add_new_todo_description']  = 'Mô tả';
$lang['no_finished_todos_found']   = 'Không tìm thấy việc đã hoàn thành';
$lang['no_unfinished_todos_found'] = 'Không tìm thấy ghi chú công việc';
$lang['unfinished_todos_title']    = 'Ghi chú việc chưa hoàn thành';
$lang['finished_todos_title']      = 'Ghi chú việc đã hoàn thành gần đây';

# Authentication
$lang['password_changed_email_subject']             = 'Mật khẩu của bạn đã được thay đổi';
$lang['password_reset_email_subject']               = 'Đặt lại mật khẩu của bạn trên %s';
# Utilities
$lang['utility_activity_log']                       = 'Nhật ký hoạt động';
$lang['utility_activity_log_filter_by_date']        = 'Lọc theo ngày';
$lang['utility_activity_log_dt_description']        = 'Mô tả';
$lang['utility_activity_log_dt_date']               = 'Ngày';
$lang['utility_activity_log_dt_staff']              = 'Nhân viên';
$lang['utility_calendar_new_event_title']           = 'Thêm sự kiện mới';
$lang['utility_calendar_new_event_start_date']      = 'Ngày bắt đầu';
$lang['utility_calendar_new_event_end_date']        = 'Ngày kết thúc';
$lang['utility_calendar_new_event_make_public']     = 'Sự kiện chung';
$lang['utility_calendar_event_added_successfully']   = 'Đã thêm sự kiện mới thành công';
$lang['utility_calendar_event_deleted_successfully'] = 'Đã xóa sự kiện';
$lang['utility_calendar_new_event_placeholder']     = 'Tiêu đề sự kiện';


# Navigation
$lang['nav_notifications']          = 'Thông báo';
$lang['nav_my_profile']             = 'Tiểu sử của tôi';
$lang['nav_edit_profile']           = 'Chỉnh sửa tiểu sử';
$lang['nav_logout']                 = 'Đăng xuất';
$lang['nav_no_notifications']       = 'Không có thông báo nào';
$lang['nav_view_all_notifications'] = 'Xem tất cả thông báo';
$lang['nav_customizer_tooltip']     = 'Tùy biến chức năng';
$lang['nav_notifications_tooltip']  = 'Xem thông báo';

## Clients
$lang['clients_required_field'] = 'Đây là mục bắt buộc';

# Footer
$lang['clients_copyright'] = 'Bản quyền thuộc về %s';

# Announcements
$lang['clients_announcement_from']  = 'Từ ';
$lang['clients_announcement_added'] = 'Đã thêm: ';

# Contracts
$lang['clients_contracts']               = 'Hợp đồng';
$lang['clients_contracts_dt_subject']    = 'Chủ đề';
$lang['clients_contracts_dt_start_date'] = 'Ngày bắt đầu';
$lang['clients_contracts_dt_end_date']   = 'Ngày kết thúc';

# Home
$lang['clients_quick_invoice_info']                = 'Thông tin sơ lược của hóa đơn';
$lang['clients_home_currency_select_tooltip']      = 'Bạn phải chọn đơn vị tiền trao đổi vì hóa đơn của bạn mang đơn vị tiền khác nhau';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Tải xuống';

$lang['clients_my_invoices']        = 'Hóa đơn';
$lang['clients_invoice_dt_number']  = 'Hóa đơn #';
$lang['clients_invoice_dt_date']    = 'Ngày xuất';
$lang['clients_invoice_dt_duedate'] = 'Hạn trả';
$lang['clients_invoice_dt_amount']  = 'Tổng cộng';
$lang['clients_invoice_dt_status']  = 'Trạng thái';

# Profile
$lang['clients_profile_heading'] = 'Tiểu sử';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Tên';
$lang['clients_lastname']  = 'Họ';
$lang['clients_email']     = 'Địa chỉ email';
$lang['clients_company']   = 'Công ty';
$lang['clients_vat']       = 'Mã số thuế';
$lang['clients_phone']     = 'Điện thoại';
$lang['clients_country']   = 'Quốc gia';
$lang['clients_city']      = 'Thành phố';
$lang['clients_address']   = 'Địa chỉ';
$lang['clients_zip']       = 'Mã bưu chính';
$lang['clients_state']     = 'Tiểu bang';
# Used for edit profile and register END

$lang['clients_register_password']        = 'Mật khẩu';
$lang['clients_register_password_repeat'] = 'Nhập lại mật khẩu';
$lang['clients_edit_profile_update_btn']  = 'Cập nhật';

$lang['clients_edit_profile_change_password_heading'] = 'Thay đổi mật khẩu';
$lang['clients_edit_profile_old_password']            = 'Mật khẩu cũ';
$lang['clients_edit_profile_new_password']            = 'Mật khẩu mới';
$lang['clients_edit_profile_new_password_repeat']     = 'Nhập lại mật khẩu';
$lang['clients_edit_profile_change_password_btn']     = 'Thay đổi mật khẩu';
$lang['clients_profile_last_changed_password']        = 'Mật khẩu thay đổi lần cuối vào %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Kiến thức chuyên môn';
$lang['clients_knowledge_base_articles_not_found'] = 'Không tìm thấy bài viết KTCM nào';
$lang['clients_knowledge_base_find_useful']        = 'Bạn có thấy bài viết này hữu ích không?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Có';
$lang['clients_knowledge_base_find_useful_no']     = 'Không';
$lang['clients_article_only_1_vote_today']         = 'Bạn có thể bỏ phiếu 1 lần trong 24 giờ';
$lang['clients_article_voted_thanks_for_feedback'] = 'Cảm ơn phản hồi của bạn';

# Tickets
$lang['clients_ticket_open_subject']                = 'Hỗ trợ chưa giải quyết';
$lang['clients_ticket_open_departments']            = 'Phòng ban';
$lang['clients_tickets_heading']                    = 'Yêu cầu hỗ trợ';
$lang['clients_ticket_open_service']                = 'Dịch vụ';
$lang['clients_ticket_open_priority']               = 'Mức độ ưu tiên';
$lang['clients_latest_tickets']                     = 'Các yêu cầu mới nhất';
$lang['clients_ticket_open_body']                   = 'Nội dung';
$lang['clients_ticket_attachments']                 = 'Tài liệu đính kèm';
$lang['clients_ticket_posted']                      = 'Đã đăng: %s';
$lang['clients_single_ticket_string']               = 'Yêu cầu';
$lang['clients_single_ticket_replied']              = 'Đã phản hồi: %s';
$lang['clients_single_ticket_information_heading'] = 'Thông tin về yêu cầu';

$lang['clients_tickets_dt_number']     = 'Yêu cầu #';
$lang['clients_tickets_dt_subject']    = 'Chủ đề';
$lang['clients_tickets_dt_department'] = 'Phòng ban';
$lang['clients_tickets_dt_service']    = 'Dịch vụ';
$lang['clients_tickets_dt_status']     = 'Trạng thái';
$lang['clients_tickets_dt_last_reply'] = 'Phản hồi lần cuối';

$lang['clients_ticket_single_department']        = 'Phòng ban: %s';
$lang['clients_ticket_single_submitted']          = 'Đã gửi: %s';
$lang['clients_ticket_single_status']            = 'Trạng thái:';
$lang['clients_ticket_single_priority']          = 'Mức độ ưu tiên: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Thêm phản hồi';
$lang['clients_ticket_single_add_reply_heading'] = 'Thêm phản hồi vào yêu cầu này';

# Login
$lang['clients_login_heading_no_register'] = 'Xin hãy đăng nhập';
$lang['clients_login_heading_register']    = 'Xin hãy đăng nhập hoặc đăng ký';
$lang['clients_login_email']               = 'Địa chỉ email';
$lang['clients_login_password']            = 'Mật khẩu';
$lang['clients_login_remember']            = 'Giữ đăng nhập cho những lần sau';
$lang['clients_login_login_string']        = 'Đăng nhập';

# Register
$lang['clients_register_string']  = 'Đăng ký';
$lang['clients_register_heading'] = 'Đăng ký';

# Navigation
$lang['clients_nav_login']     = 'Đăng nhập';
$lang['clients_nav_register']  = 'Đăng ký';
$lang['clients_nav_invoices']  = 'Hóa đơn';
$lang['clients_nav_contracts'] = 'Hợp đồng';
$lang['clients_nav_kb']        = 'Kiến thức chuyên môn';
$lang['clients_nav_profile']   = 'Tiểu sử';
$lang['clients_nav_logout']    = 'Đăng xuất';

# Datatables
$lang['clients_dt_paginate_first']    = 'Đầu';
$lang['clients_dt_paginate_last']     = 'Cuối';
$lang['clients_dt_paginate_next']     = 'Tiếp theo';
$lang['clients_dt_paginate_previous'] = 'Lùi lại';
$lang['clients_dt_empty_table']       = 'Không tìm thấy {0}';
$lang['clients_dt_search']            = 'Tìm kiếm:';
$lang['clients_dt_zero_records']      = 'Không tìm thấy báo cáo tương ứng';
$lang['clients_dt_loading_records']   = 'Đang tải...';
$lang['clients_dt_length_menu']       = 'Hiển thị _MENU_ ';
$lang['clients_dt_info_filtered']     = '(Tổng cộng {0} lọc từ _MAX_)';
$lang['clients_dt_info_empty']        = 'Hiển thị từ 0 đến 0 của 0 {0}';
$lang['clients_dt_info']              = 'Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'Không tìm thấy {0} nào';
$lang['clients_dt_sort_ascending']    = 'kích hoạt sắp xếp từ dưới lên';
$lang['clients_dt_sort_descending']   = 'kích hoạt sắp xếp từ trên xuống';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Biên lai thu tiền';
$lang['payment_for_string']                            = 'Thanh toán cho';
$lang['payment_date']                                  = 'Ngày thanh toán:';
$lang['payment_view_mode']                             = 'Phương thức thanh toán:';
$lang['payment_total_amount']                          = 'Thành tiền';
$lang['payment_table_invoice_number']                  = 'Mã số đơn hàng';
$lang['payment_table_invoice_date']                    = 'Ngày xuất';
$lang['payment_table_invoice_amount_total']            = 'Tổng cộng';
$lang['payment_table_payment_amount_total']            = 'Số tiền thanh toán';
$lang['payments_table_transaction_id']                 = 'ID giao dịch: %s';
$lang['payment_getaway_token_not_found']               = 'Không tìm thấy token';
$lang['online_payment_recorded_success']               = 'Đã thu lại thanh toán thành công';
$lang['online_payment_recorded_success_fail_database'] = 'Thanh toán thành công nhưng không thể nhập vào hệ thống, vui lòng liên hệ người quản lý';

# Leads
$lang['lead_convert_to_client']                   = 'Chuyển thành khách hàng';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'Tên';
$lang['lead_convert_to_client_lastname']          = 'Họ';
$lang['lead_email_already_exists']                = 'Email mục tiêu đã tồn tại trong dữ liệu khách hàng';
$lang['lead_to_client_base_converted_success']    = 'Mục tiêu được đổi sang khách hàng thành công';
$lang['lead_have_client_profile']                 = 'Mục tiêu này có tiểu sử khách hàng.';
$lang['lead_converted_edit_client_profile']       = 'Chỉnh sửa tiểu sử';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Xem hóa đơn với tư cách khách hàng';
$lang['invoice_add_edit_recurring']                                           = 'Gửi hóa đơn định kỳ?';
$lang['invoice_add_edit_recurring_no']                                        = 'Không';
$lang['invoice_add_edit_recurring_month']                                     = 'Mỗi %s tháng';
$lang['invoice_add_edit_recurring_months']                                    = 'Mỗi %s tháng';
$lang['invoices_list_all']                                                    = 'Tất cả';
$lang['invoices_list_not_have_payment']                                       = 'Báo cáo hóa đơn không có thanh toán';
$lang['invoices_list_recurring']                                               = 'Các hóa đơn gửi định kỳ';
$lang['invoices_list_made_payment_by']                                        = 'Thanh toán đã tạo bằng %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Chỉ tạo hóa đơn mới từ hóa đơn định kỳ khi hóa đơn mang trạng thái đã thanh toán?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Nếu mục này được đặt là CÓ và các hóa đơn định kỳ không mang trạng thái ĐÃ THANH TOÁN, thì hóa đơn mới sẽ KHÔNG được tạo.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Tự động gửi hóa đơn đã thay mới đến khách hàng';
$lang['view_invoice_pdf_link_pay']                                            = 'Thanh toán hóa đơn';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Tài khoản ngân hàng / Mô tả';
$lang['payment_mode_add_edit_description_tooltip'] = 'Bạn có thể đặt thông tin tài khoản tại đây. Sẽ được hiển thị trên hóa đơn HTML';
$lang['payment_modes_dt_description']              = 'Tài khoản ngân hàng / Mô tả';
$lang['payment_modes_add_edit_announcement']       = 'Lưu ý: Các phương thức thanh toán dưới đây dành cho ngoại tuyến. Thanh toán trực tuyến có thể tùy chỉnh trong Thiết lập -> Cài đặt -> Cổng thanh toán';
$lang['payment_mode_add_edit_active']              = 'Có hiệu lực';
$lang['payment_modes_dt_active']                   = 'Có hiệu lực';

# Contracts
$lang['contract_not_found'] = 'Không tìm thấy liên hệ. Có khả năng liên hệ đã bị xóa, xin kiểm tra nhật ký hoạt động';

# Settings
$lang['setting_bar_heading']                 = 'Thiết lập';
$lang['settings_group_online_payment_modes'] = 'Cổng thanh toán';
$lang['settings_paymentmethod_mode_label']   = 'Nhãn';
$lang['settings_paymentmethod_active']       = 'Kích hoạt';
$lang['settings_paymentmethod_currencies']   = 'Đơn vị tiền (phân cách bằng dấu phẩy)';
$lang['settings_paymentmethod_testing_mode'] = 'Kích hoạt kiểm tra';

$lang['settings_paymentmethod_paypal_username']  = 'Tên người dùng PayPal API';
$lang['settings_paymentmethod_paypal_password']  = 'Mật khẩu PayPal API';
$lang['settings_paymentmethod_paypal_signature'] = 'Chữ ký API';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Mã Stripe API riêng tư';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Mã Stripe công khai';
$lang['settings_limit_top_search_bar_results']             = 'Giới hạn kết quả thanh tìm kiếm trong khoảng';

# Quick Actions
$lang['qa_create_invoice']  = 'Tạo hóa đơn';
$lang['qa_create_task']     = 'Tạo phân công';
$lang['qa_create_client']   = 'Tạo khách hàng';
$lang['qa_create_contract'] = 'Tạo liên hệ';
$lang['qa_create_kba']      = 'Tạo bài viết KTCM';
$lang['qa_create_survey']   = 'Tạo cuộc thăm dò';
$lang['qa_create_ticket']   = 'Yêu cầu chưa giải quyết';
$lang['qa_create_staff']    = 'Tạo nhân viên';

## Clients
$lang['client_phonenumber'] = 'Điện thoại';

# Main Clients
$lang['clients_register']                          = 'Đăng ký';
$lang['clients_profile_updated']                   = 'Tiểu sử của bạn đã được cập nhật';
$lang['clients_successfully_registered']           = 'Cảm ơn bạn đã đăng ký';
$lang['clients_account_created_but_not_logged_in'] = 'Tài khoản của bạn đã được tạo nhưng không tự động đăng nhập. Xin hãy đăng nhập thủ công';
# Tickets
$lang['clients_tickets_heading']                   = 'Yêu cầu hỗ trợ';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Thanh toán cho hóa đơn';
$lang['payment_total']       = 'Tổng cộng: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Thanh toán trực tuyến';
$lang['invoice_html_online_payment_button_text'] = 'Thanh toán ngay';
$lang['invoice_html_payment_modes_not_selected'] = 'Xin hãy chọn phương thức thanh toán';
$lang['invoice_html_amount_blank']               = 'Số tiền tổng cộng có thể để trống hoặc nhập không';
$lang['invoice_html_offline_payment']            = 'Thanh toán ngoại tuyến';
$lang['invoice_html_amount']                     = 'Tổng cộng';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Mức độ hiển thị';
$lang['dt_button_reload']             = 'Tải lại';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'In';
$lang['is_not_active_export']         = 'Không';
$lang['is_active_export']             = 'Có';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Chức năng nâng cao';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Cho phép sử dụng nhiều phương thức thanh toán hóa đơn này';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Tạo hóa đơn mới từ hóa đơn định kỳ này';
$lang['invoice_add_edit_no_payment_modes_found']         = 'Không tìm thấy phương thức thanh toán nào.';
$lang['invoice_html_total_pay']                          = 'Tổng cộng: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Tên gọi mẫu';
# General
$lang['discount_type']                      = 'Loại chiết khấu';
$lang['discount_type_after_tax']            = 'Sau thuế';
$lang['discount_type_before_tax']           = 'Trước thuế';
$lang['terms_and_conditions']               = 'Điều khoản & luật lệ';
$lang['reference_no']                       = 'Tham khảo #';
$lang['no_discount']                        = 'Miễn chiết khấu';
$lang['view_stats_tooltip']                 = 'Xem nhanh thống kê';
# Clients
$lang['zip_from_date']                      = 'Từ ngày:';
$lang['zip_to_date']                        = 'Đến ngày:';
$lang['client_zip_payments']                = 'Thanh toán ZIP';
$lang['client_zip_invoices']                = 'Hóa đơn ZIP';
$lang['client_zip_estimates']               = 'Báo giá ZIP';
$lang['client_zip_status']                  = 'Trạng thái';
$lang['client_zip_status_all']              = 'Tất';
$lang['client_zip_payment_modes']           = 'Thanh toán bởi';
$lang['client_zip_no_data_found']           = 'Không tìm thấy %s';

# Payments
$lang['payment_mode']         = 'Phương thức thanh toán';
$lang['payment_view_heading'] = 'Thanh toán';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Cho phép khách hàng tùy chỉnh số tiền trả (áp dụng cho thanh toán trực tuyến)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Bao nhiêu email cần gửi đi mỗi giờ';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Chức năng này được dùng khi gửi phiếu thăm dò. Cron sẽ gửi X email mỗi tiếng đồng hồ. Một vài nhà cung cấp hosting có giới hạn cho việc này.';
$lang['settings_delete_only_on_last_invoice']                       = 'Chỉ áp dụng chức năng xóa cho hóa đơn trước';
$lang['settings_sales_estimate_prefix']                             = 'Số báo giá';
$lang['settings_sales_next_estimate_number']                        = 'Số báo giá tiếp theo';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Nhập 1 vào mục này nếu bạn muốn tiến hành từ đầu';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Tự động giảm số thứ tự khi có hóa đơn bị xóa';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Bạn có muốn hạ số thứ tự cho hóa đơn khi có hóa đơn trước nó bị xóa? Ví dụ: Nếu chọn Có thì số hóa đơn kế tiếp là 15 sẽ tự động lùi xuống 14. Nếu chọn Không thì vẫn sẽ là 15. Nếu bạn chỉ đặt Không cho hóa đơn trước thì nên đặt Không cho cả hóa đơn này để số hóa đơn kế tiếp không bị lùi xuống.';
$lang['settings_sales_estimate_number_format']                      = 'Định dạng số hóa đơn';
$lang['settings_sales_estimate_number_format_year_based']           = 'Hệ năm';
$lang['settings_sales_estimate_number_format_number_based']         = 'Hệ số (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Chỉ cho phép xóa báo giá trên hóa đơn trước';
$lang['settings_cron_invoice_heading']                              = 'Hóa đơn';
$lang['settings_send_test_email_heading']                           = 'Gửi thử email';
$lang['settings_send_test_email_subheading']                        = 'Gửi thử email để chắc chắn SMTP của bạn được cài đặt chính xác.';
$lang['settings_send_test_email_string']                            = 'Địa chỉ email';
$lang['settings_smtp_settings_heading']                             = 'Cài đặt SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Thiết lập email chính';

$lang['settings_sales_heading_general']                             = 'Tổng quan';
$lang['settings_sales_heading_invoice']                             = 'Hóa đơn';
$lang['settings_sales_heading_estimates']                           = 'Báo giá';
$lang['settings_sales_heading_company']                             = 'Công ty';
$lang['settings_sales_cron_invoice_heading']                        = 'Hóa đơn';

# Tasks
$lang['tasks_dt_datestart'] = 'Ngày bắt đầu';
$lang['tasks_dt_priority']  = 'Mức độ ưu tiên';

# Invoice General
$lang['invoice_discount'] = 'Chiếu khấu';

# Settings
$lang['settings_rtl_support_admin']                                   = 'Khu vực admin RTL (Phải sang Trái)';
$lang['settings_rtl_support_client']                                  = 'Khu vực khách hàng RTL (Phải sang Trái)';
$lang['acs_language_editor']                                          = 'Tùy chỉnh ngôn ngữ';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Tự động chuyển báo giá thành hóa đơn sau khi khách hàng đồng ý';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Loại bỏ báo giá có trạng thái Nháp khỏi khu vực khách hàng';

# Months
$lang['January']   = 'Tháng 1';
$lang['February']  = 'Tháng 2';
$lang['March']     = 'Tháng 3';
$lang['April']     = 'Tháng 4';
$lang['May']       = 'Tháng 5';
$lang['June']      = 'Tháng 6';
$lang['July']      = 'Tháng 7';
$lang['August']    = 'Tháng 8';
$lang['September'] = 'Tháng 9';
$lang['October']   = 'Tháng 10';
$lang['November']  = 'Tháng 11';
$lang['December']  = 'Tháng 12';

# Time ago function translate
$lang['time_ago_just_now']  = 'Vừa xong';
$lang['time_ago_minute']    = '1 phút trước';
$lang['time_ago_minutes']   = '%s phút trước';
$lang['time_ago_hour']      = '1 tiếng trước';
$lang['time_ago_hours']     = '%s tiếng trước';
$lang['time_ago_yesterday'] = 'hôm qua';
$lang['time_ago_days']      = '%s ngày trước';
$lang['time_ago_week']      = '1 tuần trước';
$lang['time_ago_weeks']     = '%s tuần trước';
$lang['time_ago_month']     = '1 tháng trước';
$lang['time_ago_months']    = '%s tháng trước';
$lang['time_ago_year']      = '1 năm trước';
$lang['time_ago_years']     = '%s năm trước';


# Estimates
$lang['estimates']                          = 'Báo giá';
$lang['estimate']                           = 'Báo giá';
$lang['estimate_lowercase']                 = 'báo giá';
$lang['create_new_estimate']                = 'Tạo báo giá mới';
$lang['view_estimate']                      = 'Xem báo giá';
$lang['estimate_sent_to_client_success']    = 'Bản báo giá được gửi thành công';
$lang['estimate_sent_to_client_fail']       = 'Có trục trặc xảy ra khi đang gửi báo giá';
$lang['estimate_reminder_send_problem']     = 'Phát sinh vấn đề khi đang gửi nhắc nhở quá hạn báo giá';
$lang['estimate_details']                   = 'Chi tiết bản báo giá';
$lang['estimate_view']                      = 'Xem bản báo giá';
$lang['estimate_select_customer']           = 'Khách hàng';
$lang['estimate_add_edit_number']           = 'Số báo giá';
$lang['estimate_add_edit_date']             = 'Ngày báo';
$lang['estimate_add_edit_expirydate']       = 'Ngày hết hạn';
$lang['estimate_add_edit_currency']         = 'Đơn vị tiền';
$lang['estimate_add_edit_client_note']      = 'Ghi chú khách hàng';
$lang['estimate_add_edit_admin_note']       = 'Ghi chú admin';
$lang['estimate_add_edit_new_item']         = 'Thêm mục mới';
$lang['estimate_add_edit_search_item']      = 'Tìm kiếm';
$lang['estimates_toggle_table_tooltip']     = 'Bật/tắt danh sách';
$lang['estimate_add_edit_advanced_options'] = 'Chức năng nâng cao';
$lang['estimate_vat']                       = 'Mã số thuế';
$lang['estimate_to']                        = 'Đến';
$lang['estimates_list_all']                 = 'Tất cả';

$lang['estimate_invoiced_date']                  = 'Lập bản báo giá trên %s';
$lang['edit_estimate_tooltip']                   = 'Sửa báo giá';
$lang['delete_estimate_tooltip']                 = 'Xóa báo giá';
$lang['estimate_sent_to_email_tooltip']          = 'Gửi đến email';
$lang['estimate_already_send_to_client_tooltip'] = 'Bản báo giá này đã được gửi đến khách hàng %s';
$lang['send_overdue_notice_tooltip']             = 'Gửi thông báo quá hạn';
$lang['estimate_view_activity_tooltip']          = 'Nhật ký hoạt động';

$lang['estimate_send_to_client_modal_heading']    = 'Gửi báo giá cho khách hàng';
$lang['estimate_send_to_client_attach_pdf']       = 'Đính kèm file báo giá PDF';
$lang['estimate_send_to_client_preview_template'] = 'Xem trước email mẫu';

$lang['estimate_dt_table_heading_number']     = 'Bản báo giá #';
$lang['estimate_dt_table_heading_date']       = 'Ngày';
$lang['estimate_dt_table_heading_client']     = 'Khách hàng';
$lang['estimate_dt_table_heading_expirydate'] = 'Ngày hết hạn';
$lang['estimate_dt_table_heading_amount']     = 'Tổng cộng';
$lang['estimate_dt_table_heading_status']     = 'Trạng thái';

$lang['estimate_email_link_text']    = 'Xem bản báo giá';
$lang['estimate_convert_to_invoice'] = 'Chuyển thành hóa đơn';
# Home
$lang['home_unfinished_tasks']       = 'Phân công chưa hoàn thành';

# Clients
$lang['client_estimates_tab'] = 'Báo giá';
$lang['client_payments_tab']  = 'Thanh toán';


# Estimate General
$lang['estimate_pdf_heading']            = 'BÁO GIÁ';
$lang['estimate_table_item_heading']     = 'Các mục';
$lang['estimate_table_quantity_heading'] = 'SLượng';
$lang['estimate_table_rate_heading']     = 'Giá';
$lang['estimate_table_tax_heading']      = 'Thuế';
$lang['estimate_table_amount_heading']   = 'Tổng';
$lang['estimate_subtotal']               = 'Chưa qua thuế - Chi phí';
$lang['estimate_adjustment']             = 'Điều chỉnh';
$lang['estimate_discount']               = 'Chiết khấu';
$lang['estimate_total']                  = 'Thành tiền';
$lang['estimate_to']                     = 'Đến';
$lang['estimate_data_date']              = 'Ngày báo giá';
$lang['estimate_data_expiry_date']       = 'Ngày hết hạn';
$lang['estimate_note']                   = 'Ghi chú:';
$lang['estimate_status_draft']           = 'Nháp';
$lang['estimate_status_sent']            = 'Đã gửi';
$lang['estimate_status_declined']        = 'Từ chối';
$lang['estimate_status_accepted']        = 'Chấp nhận';
$lang['estimate_status_expired']         = 'Hết hạn';
$lang['estimate_note']                   = 'Ghi chú:';

# Quick create
$lang['qa_create_estimate'] = 'Tạo bản báo giá';
$lang['qa_create_lead']     = 'Tạo mục tiêu';


## Clients
$lang['clients_estimate_dt_number']             = 'Báo giá #';
$lang['clients_estimate_dt_date']               = 'Ngày';
$lang['clients_estimate_dt_duedate']            = 'Hạn chót';
$lang['clients_estimate_dt_amount']             = 'Tổng cộng';
$lang['clients_estimate_dt_status']             = 'Trạng thái';
$lang['clients_nav_estimates']                  = 'Báo giá';
$lang['clients_decline_estimate']               = 'Từ chối';
$lang['clients_accept_estimate']                = 'Đồng ý';
$lang['clients_my_estimates']                   = 'Báo giá';
$lang['clients_estimate_invoiced_successfully']  = 'Cảm ơn bạn đã chấp thuận bản báo giá. Vui lòng kiểm tra lại hóa đơn đã tạo từ bản báo giá';
$lang['clients_estimate_accepted_not_invoiced'] = 'Cảm ơn bạn đã chấp thuận bản báo giá';
$lang['clients_estimate_declined']              = 'Đã từ chối bản báo giá. Bạn có thể chấp thuận lại bất cứ khi nào trước ngày hết hạn';
$lang['clients_estimate_failed_action']         = 'Thao tác thất bại cho bản báo giá này';
$lang['client_add_edit_profile']                = 'Tiểu sử';

# Custom Fields
$lang['custom_field']                          = 'Mục tự tạo';
$lang['custom_field_lowercase']                = 'mục tự tạo';
$lang['custom_fields']                         = 'Các mục tự tạo';
$lang['custom_fields_lowercase']               = 'các mục tự tạo';
$lang['new_custom_field']                      = 'Mục tự tạo mới';
$lang['custom_field_name']                     = 'Tên gọi';
$lang['custom_field_add_edit_type']            = 'Loại';
$lang['custom_field_add_edit_belongs_top']     = 'Mục này thuộc về';
$lang['custom_field_add_edit_options']         = 'Chức năng';
$lang['custom_field_add_edit_options_tooltip'] = 'Chỉ dùng cho kiểu Chọn hoặc Đánh dấu. Phân cách các lựa chọn bằng dấu phẩy. Ví dụ: táo, cam, chuối';
$lang['custom_field_add_edit_order']           = 'Thứ tự';

$lang['custom_field_dt_field_to']       = 'Thuộc về';
$lang['custom_field_dt_field_name']     = 'Tên';
$lang['custom_field_dt_field_type']     = 'Loại';
$lang['custom_field_add_edit_active']   = 'Kích hoạt';
$lang['custom_field_add_edit_disabled'] = 'Vô hiệu hóa';

# Ticket replies
$lang['ticket_reply']           = 'Phản hồi yêu cầu';
$lang['ticket_reply_lowercase'] = 'phản hồi yêu cầu';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Các mục tự tạo';

# Contracts
$lang['contract_types']          = 'Các loại hợp đồng';
$lang['contract_type']           = 'Loại hợp đồng';
$lang['new_contract_type']       = 'Loại hợp đồng mới';
$lang['contract_type_lowercase'] = 'hợp đồng';
$lang['contract_type_name']      = 'Tên';

$lang['contract_types_list_name'] = 'Loại hợp đồng';

# Customizer Menu
$lang['acs_contracts']      = 'Hợp đồng';
$lang['acs_contract_types'] = 'Các loại hợp đồng';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Mô tả dài';
# Customers
$lang['client_delete_invoices_warning']    = 'Khách hàng này có giữ hóa đơn hoặc báo giá trong tài khoản. Bạn không thể xóa khách hàng này. Chuyển tất cả hóa đơn sang khách hàng khác để tiến hành xóa.';
$lang['clients_list_phone']                = 'Điện thoại';
$lang['client_expenses_tab']               = 'Chi phí';
$lang['customers_summary']                 = 'Tổng quan khách hàng';
$lang['customers_summary_active']          = 'Liên hệ đang hoạt động';
$lang['customers_summary_inactive']        = 'Liên hệ ít hoạt động';
$lang['customers_summary_logged_in_today'] = 'Các liên hệ đã đăng nhập hôm nay';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Địa chỉ email';
$lang['admin_auth_forgot_password_heading']           = 'Quên mật khẩu';
$lang['admin_auth_login_heading']                     = 'Đăng nhập';
$lang['admin_auth_login_email']                       = 'Địa chỉ email';
$lang['admin_auth_login_password']                    = 'Mật khẩu';
$lang['admin_auth_login_remember_me']                 = 'Ghi nhớ cho lần đăng nhập sau';
$lang['admin_auth_login_button']                      = 'Đăng nhập';
$lang['admin_auth_login_fp']                          = 'Quên mật khẩu?';
$lang['admin_auth_reset_password_heading']            = 'Đặt lại mật khẩu';
$lang['admin_auth_reset_password']                    = 'Mật khẩu';
$lang['admin_auth_reset_password_repeat']             = 'Nhập lại mật khẩu';
$lang['admin_auth_invalid_email_or_password']         = 'Email hoặc mật khẩu không hợp lệ';
$lang['admin_auth_inactive_account']                  = 'Tài khoản chưa kích hoạt';
# Calender
$lang['calendar_estimate']                            = 'Báo giá';
$lang['calendar_invoice']                             = 'Hóa đơn';
$lang['calendar_contract']                            = 'Hợp đồng';
$lang['calendar_customer_reminder']                     = 'Nhắc nhở khách hàng';
$lang['calendar_event']                               = 'Sự kiện';
$lang['calendar_task']                                = 'Phân công';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Xóa Khách tìm năng';
$lang['lead_attachments']                             = 'Tập tin đính kèm';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Tài chính';
# Settings

$lang['settings_show_sale_agent_on_invoices']         = 'Hiển thị người bán trên hóa đơn';
$lang['settings_show_sale_agent_on_estimates']        = 'Hiển thị người bán trên bản báo giá';
$lang['settings_predefined_predefined_term']          = 'Điều khoản & luật lệ đặt trước';
$lang['settings_predefined_clientnote']               = 'Ghi chú khách hàng đã tạo trước';
$lang['settings_custom_pdf_logo_image_url']           = 'Liên kết file PDF logo công ty';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Có thể bạn sẽ gặp vấn đề với ảnh định dạng PNG hiển thị không như ý muốn tùy theo phiên bản php-imagick hoặc php-gd đang dùng. Hãy thử cập nhật php-imagick và tắt php-gd. Nếu bạn để trống mục này thì hệ thống sẽ sử dụng logo được tải lên.';

# General
$lang['sale_agent_string']               = 'Người bán';
$lang['amount_display_in_base_currency'] = 'Tổng số được hiển thị theo đơn vị tiền mà bạn chọn - Chỉ sử dụng báo cáo này nếu bạn đang dùng chung 1 loại đơn vị cho thanh toán và Chi phí.';
# Leads
$lang['leads_summary']                                         = 'Tổng quan Khách tìm năng';

# Contracts
$lang['contract_value']                 = 'Giá trị hợp đồng';
$lang['contract_trash']                 = 'Thùng rác';
$lang['contracts_view_trash']           = 'Xem thùng rác';
$lang['contracts_view_all']             = 'Tất cả';
$lang['contracts_view_exclude_trashed'] = 'Xóa tất cả hợp đồng trong thùng rác';
$lang['contract_value_tooltip']         = 'Đơn vị tiền gốc sẽ được sử dụng.';
$lang['contract_trash_tooltip']         = 'Nếu bạn chuyển hợp đồng vào thùng rác, hợp đồng sẽ không hiển thị bên phía khách hàng, không đính kèm trong thống kế biểu đồ và, như mặc định, không xuất hiện nếu bạn liệt kê danh sách hợp đồng.';
$lang['contract_summary_active']              = 'Kích hoạt';
$lang['contract_renew_heading']               = 'Làm mới hợp đồng';
$lang['contract_summary_heading']             = 'Tổng quan hợp đồng';
$lang['contract_summary_expired']             = 'Đã hết hạn';
$lang['contract_summary_about_to_expire']     = 'Sắp hết hạn';
$lang['contract_summary_recently_added']      = 'Vừa được thêm';
$lang['contract_summary_trash']               = 'Thùng rác';
$lang['contract_summary_by_type']             = 'Hợp đồng theo loại';
$lang['contract_summary_by_type_value']       = 'Giá trị hợp đồng theo loại';
$lang['contract_renewed_successfully']         = 'Hợp đồng được làm mới thành công';
$lang['contract_renewed_fail']                = 'Xảy ra trục trặc trong khi làm mới hợp đồng. Vui lòng liên hệ người quản lý';
$lang['no_contract_renewals_found']           = 'Không tìm thấy bản làm mới của hợp đồng này';
$lang['no_contract_renewals_history_heading'] = 'Lịch sử làm mới hợp đồng';
$lang['contract_renewed_by']                  = '%s đã làm mới hợp đồng này';
$lang['contract_renewal_deleted']             = 'Đã xóa bản làm mới thành công';
$lang['contract_renewal_delete_fail']         = 'Không thể xóa bản làm mới hợp đồng. Liên hệ người quản lý';

$lang['contract_renewal_new_value'] = 'Giá trị hợp đồng mới: %s';
$lang['contract_renewal_old_value'] = 'Giá trị hợp đồng cũ: %s';

$lang['contract_renewal_new_start_date'] = 'Ngày bắt đầu mới: %s';
$lang['contract_renewal_old_start_date'] = 'Ngày bắt đầu hợp đồng cũ là: %s';

$lang['contract_renewal_new_end_date'] = 'Ngày kết thúc mới: %s';
$lang['contract_renewal_old_end_date'] = 'Ngày kết thúc hợp đồng cũ là: %s';
$lang['contract_attachment']           = 'Tập tin đính kèm';
$lang['contract_attachment_lowercase'] = 'tập tin đính kèm';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Theo dõi tiến độ';
$lang['als_expenses']           = 'Chi phí';
$lang['als_reports_expenses']   = 'Chi phí';
$lang['als_expenses_vs_income'] = 'Chi phí và thu nhập';

# Invoices
$lang['invoice_attach_file']           = 'Đính kèm tập tin';
$lang['invoice_mark_as_sent']          = 'Đánh dấu là đã gửi';
$lang['invoice_marked_as_sent']        = 'Đánh dấu hóa đơn là đã gửi thành công';
$lang['invoice_marked_as_sent_failed'] = 'Đánh dấu hóa đơn là đã gửi không thành công';

# Quick Actions
$lang['qa_new_goal']    = 'Tạo mục tiêu mới';
$lang['qa_new_expense'] = 'Báo cáo thu chi';

# Goals Tracking
$lang['goals']                                         = 'Các mục tiêu';
$lang['goal']                                          = 'Mục tiêu';
$lang['goals_tracking']                                = 'Theo dõi tiến độ';
$lang['new_goal']                                      = 'Mục tiêu mới';
$lang['goal_lowercase']                                = 'mục tiêu';
$lang['goal_start_date']                               = 'Ngày bắt đầu';
$lang['goal_end_date']                                 = 'Ngày kết thúc';
$lang['goal_subject']                                  = 'Chủ đề';
$lang['goal_description']                              = 'Mô tả';
$lang['goal_type']                                     = 'Dạng mục tiêu';
$lang['goal_achievement']                              = 'Thành tựu';
$lang['goal_contract_type']                            = 'Loại hợp đồng';
$lang['goal_notify_when_fail']                         = 'Thông báo đến nhân viên khi không hoàn thành được mục tiêu';
$lang['goal_notify_when_achieve']                      = 'Thông báo đến nhân viên khi hoàn thành được mục tiêu';
$lang['goal_progress']                                 = 'Tiến trình';
$lang['goal_total']                                    = 'Tổng cộng: %s';
$lang['goal_result_heading']                           = 'Tiến độ mục tiêu';
$lang['goal_income_shown_in_base_currency']            = 'Tổng thu nhập được hiển thị theo đơn vị tiền gốc bạn chọn';
$lang['goal_notify_when_end_date_arrives']             = 'Nhân viên sẽ được thông báo khi ngày kết thúc đến (yêu cầu CRON).';
$lang['goal_staff_members_notified_about_achievement'] = 'Nhân viên được nhận thông báo về thành tựu này';
$lang['goal_staff_members_notified_about_failure']     = 'Nhân viên được thông báo về thất bại này';
$lang['goal_notify_staff_manually']                     = 'Thông báo đến nhân viên theo cách thủ công';
$lang['goal_notify_staff_notified_manually_success']    = 'Nhân viên được nhận thông báo về kết quả mục tiêu này';
$lang['goal_notify_staff_notified_manually_fail']       = 'Gửi thông báo đến nhân viên không thành công';

$lang['goal_achieved'] = 'Đã đạt được';
$lang['goal_failed']   = 'Thất bại';
$lang['goal_close']    = 'Rất gần';

$lang['goal_type_total_income']                                         = 'Đạt được tổng thu nhập';
$lang['goal_type_convert_leads']                                        = 'Chuyển X Khách tìm năng';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Gia tăng lượng khách';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Không cần liên hệ mục tiêu';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Gia tăng số lượng khách';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Có liên hệ mục tiêu';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Tạo hợp đồng theo loại';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Được tính từ ngày thêm vào hệ thống';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Tạo hợp đồng theo loại';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Được tính từ ngày bắt đầu hợp đồng';
$lang['goal_type_total_estimates_converted']                         = 'X lần chuyển đổi báo giá ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Chỉ tính những bản báo giá được chuyển sang hóa đơn';
$lang['goal_type_income_subtext']                                    = 'Thu nhập sẽ được tính theo đơn vị tiền gốc bạn đã chọn (không chuyển đổi)';
# Payments
$lang['payment_transaction_id']                                      = 'ID giao dịch';
# Settings Menu
$lang['acs_expenses']                                                = 'Chi phí';
$lang['acs_expense_categories']                                      = 'Phân loại Chi phí';
# Expenses
$lang['expense_category']                                            = 'Phân loại Chi phí';
$lang['expense_category_lowercase']                                  = 'phân loại Chi phí';
$lang['new_expense']                                                 = 'Báo cáo Chi phí';
$lang['expense_add_edit_name']                                       = 'Tên phân loại';
$lang['expense_add_edit_description']                                = 'Mô tả phân loại';
$lang['expense_categories']                                          = 'Phân loại Chi phí';
$lang['new_expense_category']                                        = 'Phân loại mới';
$lang['dt_expense_description']                                      = 'Mô tả';
$lang['expense']                                                     = 'Chi phí';
$lang['expenses']                                                    = 'Chi phí';
$lang['expense_lowercase']                                           = 'Chi phí';
$lang['expense_add_edit_tax']                                        = 'Thuế';
$lang['expense_add_edit_customer']                                   = 'Khách hàng';
$lang['expense_add_edit_currency']                                   = 'Đơn vị';
$lang['expense_add_edit_note']                                       = 'Ghi chú';
$lang['expense_add_edit_date']                                       = 'Ngày chi';
$lang['expense_add_edit_amount']                                     = 'Số tiền';
$lang['expense_add_edit_billable']                                   = 'Có thể tạo biên nhận';
$lang['expense_add_edit_attach_receipt']                             = 'Đính kèm biên lai';
$lang['expense_add_edit_reference_no']                               = 'Tham khảo #';
$lang['expense_receipt']                                             = 'Hóa đơn chi';
$lang['expense_receipt_lowercase']                                   = 'hóa đơn chi';
$lang['expense_dt_table_heading_category']                           = 'Phân loại';
$lang['expense_dt_table_heading_amount']                             = 'Số tiền';
$lang['expense_dt_table_heading_date']                               = 'Ngày';
$lang['expense_dt_table_heading_reference_no']                       = 'Tham khảo #';
$lang['expense_dt_table_heading_customer']                           = 'Khách hàng';
$lang['expense_dt_table_heading_payment_mode']                       = 'Phương thức thanh toán';
$lang['expense_converted_to_invoice']                                = 'Chi phí được chuyển sang hóa đơn thành công';
$lang['expense_converted_to_invoice_fail']                           = 'Chi phí chuyển sang hóa đơn thất bại.';
$lang['expense_copy_success']                                        = 'Sao chép Chi phí thành công';
$lang['expense_copy_fail']                                           = 'Sao chép Chi phí thất bại. Vui lòng kiểm tra các mục yêu cầu và thử lại';
$lang['expenses_list_all']                                           = 'Tất cả';
$lang['expenses_list_billable']                                      = 'Có thể tạo biên nhận';
$lang['expenses_list_non_billable']                                  = 'Không thể tạo biên nhận';
$lang['expenses_list_invoiced']                                      = 'Đã xuất hóa đơn';
$lang['expenses_list_unbilled']                                      = 'Chưa xuất hóa đơn';
$lang['expenses_list_recurring']                                     = 'Định kỳ';
$lang['expense_invoice_delete_not_allowed']                          = 'Bạn không thể xóa khoản chi này. Khoản chi đã được chuyển sang hóa đơn.';
$lang['expense_convert_to_invoice']                                  = 'Chuyển sang hóa đơn';
$lang['expense_edit']                                                = 'Thay đổi Chi phí';
$lang['expense_delete']                                              = 'Xóa';
$lang['expense_copy']                                                = 'Sao chép';
$lang['expense_invoice_not_created']                                 = 'Hóa đơn chưa được tạo';
$lang['expense_billed']                                              = 'Đã xuất biên nhận';
$lang['expense_not_billed']                                          = 'Hóa đơn chưa được trả';
$lang['expense_customer']                                            = 'Khách hàng';
$lang['expense_note']                                                = 'Ghi chú:';
$lang['expense_date']                                                = 'Ngày:';
$lang['expense_ref_noe']                                             = 'ThKh #:';
$lang['expense_tax']                                                 = 'Thuế:';
$lang['expense_amount']                                              = 'Số tiền:';
$lang['expense_recurring_indicator']                                 = 'Định kỳ';
$lang['expense_already_invoiced']                                    = 'Khoản chi này đã được chuyển thành hóa đơn';
$lang['expense_recurring_auto_create_invoice']                       = 'Tự động tạo hóa đơn';
$lang['expense_recurring_send_custom_on_renew']                      = 'Gửi hóa đơn vào email khách hàng khi Chi phí lặp lại';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Nếu chọn mục này thì hệ thống sẽ tự tạo hóa đơn cho khách hàng khi Chi phí được thay mới.';
$lang['report_expenses_full']                                        = 'Báo cáo đầy đủ';
$lang['expenses_yearly_by_categories']                               = 'Chi phí hàng năm theo phân loại';
$lang['total_expenses_for']                                          = 'Chi phí tổng cộng cho'; // year
$lang['expenses_report_for']                                         = 'Thu chi cho'; // year
# Custom fields
$lang['custom_field_required']                                       = 'Bắt buộc';
$lang['custom_field_show_on_pdf']                                    = 'Hiển thị trên PDF';
$lang['custom_field_leads']                                          = 'Khách tìm năng';
$lang['custom_field_customers']                                      = 'Khách hàng';
$lang['custom_field_staff']                                          = 'Nhân viên';
$lang['custom_field_contracts']                                      = 'Hợp đồng';
$lang['custom_field_tasks']                                          = 'Phân công';
$lang['custom_field_expenses']                                       = 'Thu chi';
$lang['custom_field_invoice']                                        = 'Hóa đơn';
$lang['custom_field_estimate']                                       = 'Báo giá';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Ghi chú riêng tư cho nhân viên';


# Business News
$lang['business_news'] = 'Tin tức kinh doanh';

# Navigation
$lang['nav_todo_items']               = 'Việc cần làm';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Loại hợp đồng';
# Version 1.0.5
# General
$lang['no_tax']                             = 'Miễn thuế';
$lang['numbers_not_formatted_while_editing'] = 'Tỉ giá ở trường nhập không được định dạng trong khi sửa/thêm mục mới và không nên để nguyên như vậy. Cũng đừng  định dạng thủ công ở đây.';
# Contracts
$lang['contracts_view_expired']             = 'Hết hạn';
$lang['contracts_view_without_dateend']     = 'Các hợp đồng không có ngày kết thúc';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Hợp đồng';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Chức năng chung';
$lang['invoice_table_item_description']          = 'Mô tả';
$lang['invoice_recurring_indicator']             = 'Định kỳ';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Bản báo giá chuyển đổi sang hóa đơn thành công';
$lang['estimate_table_item_description']         = 'Mô tả';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Bạn không thể xóa đơn vị tiền gốc hiện có. Bạn phải đặt lại đơn vị tiền mới để tiến hành xóa đơn vị này.';
$lang['invoice_copy']              = 'Sao chép hóa đơn';
$lang['invoice_copy_success']      = 'Sao chép hóa đơn thành công';
$lang['invoice_copy_fail']         = 'Sao chép hóa đơn không thành công';
$lang['invoice_due_after_help']    = 'Đặt giá trị không để tránh cộng vào';

$lang['show_shipping_on_invoice'] = 'Hiển thị phí vận chuyển trong hóa đơn';

# Estimates
$lang['show_shipping_on_estimate']         = 'Hiển thị phí vận chuyển trong bản báo giá';
$lang['is_invoiced_estimate_delete_error'] = 'Bản báo giá này đã được chuyển thành hóa đơn. Bạn không thể xóa bản báo giá này';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Chuyển đến';
$lang['customer_profile_details'] = 'Thông tin khách hàng';
$lang['billing_shipping']         = 'Thanh toán & Nhận hàng';
$lang['billing_address']          = 'Địa chỉ thanh toán';
$lang['shipping_address']         = 'Địa chỉ nhận hàng';

$lang['billing_street']  = 'Đường';
$lang['billing_city']    = 'Thành phố';
$lang['billing_state']   = 'Bang';
$lang['billing_zip']     = 'Mã bưu chính';
$lang['billing_country'] = 'Quốc gia';

$lang['shipping_street']                    = 'Đường';
$lang['shipping_city']                      = 'Thành phố';
$lang['shipping_state']                     = 'Bang';
$lang['shipping_zip']                       = 'Mã bưu chính';
$lang['shipping_country']                   = 'Quốc gia';
$lang['get_shipping_from_customer_profile'] = 'Lấy thông tin giao hàng từ tiểu sử khách hàng';

# Customer
$lang['customer_file_from']                                    = 'Hiển thị từ %s';
$lang['customer_default_currency']                             = 'Đơn vị tiền mặc định';
$lang['customer_no_attachments_found']                         = 'Không tìm thấy tập tin đính kèm nào';
$lang['customer_update_address_info_on_invoices']              = 'Cập nhật thông tin nhận hàng/thanh toán trên tất cả những bản báo giá/hóa đơn trước';
$lang['customer_update_address_info_on_invoices_help']         = 'Nếu bạn tick chọn mục này, thông tin nhận hàng và thanh toán sẽ áp dụng cho tất cả hóa đơn và báo giá. Lưu ý: hóa đơn đã thanh toán sẽ không bị ảnh hưởng.';
$lang['setup_google_api_key_customer_map']                     = 'Thiết lập mã Google API để xem vị trí khách hàng';
$lang['customer_attachments_file']                             = 'Tập tin';
$lang['client_send_set_password_email']                        = 'Gửi email đặt mật khẩu';
$lang['customer_billing_same_as_profile']                      = 'Như thông tin khách hàng';
$lang['customer_billing_copy']                                 = 'Sao chép địa chỉ thanh toán';
$lang['customer_map']                                          = 'Bản đồ';
$lang['set_password_email_sent_to_client']                     = 'Email đặt mật khẩu đã gửi đến liên hệ thành công';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Đã cập nhật tiểu sử và gửi email đặt mật khẩu đến liên hệ thành công';
$lang['customer_attachments']                                  = 'Các tập tin';
$lang['customer_longitude']                                    = 'Kinh độ (Google Maps)';
$lang['customer_latitude']                                     = 'Vĩ độ (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Mật khẩu';
$lang['admin_auth_set_password_repeat']   = 'Nhập lại mật khẩu';
$lang['admin_auth_set_password_heading']  = 'Đặt mật khẩu';
$lang['password_set_email_subject']       = 'Đặt mật khẩu mới trên %s';
# General
$lang['apply']                            = 'Áp dụng';
$lang['department_calendar_id']           = 'Google Calendar ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Ngôn ngữ mặc định';
$lang['system_default_string']            = 'Mặc định hệ thống';
$lang['advanced_options']                 = 'Chức năng nâng cao';
# Expenses
$lang['expense_list_invoice']             = 'Đã xuất hóa đơn';
$lang['expense_list_billed']              = 'Đã xuất biên nhận';
$lang['expense_list_unbilled']            = 'Chưa xuất hóa đơn';
# Leads
$lang['lead_merge_custom_field']          = 'Gộp thành mục tùy chỉnh';
$lang['lead_merge_custom_field_existing'] = 'Gộp với mục cơ sở dữ liệu';
$lang['lead_dont_merge_custom_field']     = 'Không gộp';
$lang['no_lead_notes_found']              = 'Không tìm thấy ghi chú mục tiêu nào';
$lang['leads_view_list']                  = 'Danh sách';
$lang['lost_leads']                       = 'Mục tiêu không liên lạc được';
$lang['junk_leads']                       = 'Mục tiêu rác';
$lang['lead_mark_as_lost']                = 'Đánh dấu là mất liên lạc';
$lang['lead_unmark_as_lost']              = 'Bỏ đánh dấu mất liên lạc';
$lang['lead_marked_as_lost']              = 'Đã đánh dấu mất liên lạc thành công';
$lang['lead_unmarked_as_lost']            = 'Bỏ đánh dấu mất liên lạc thành công';
$lang['leads_status_color']               = 'Màu';

$lang['lead_mark_as_junk']     = 'Đánh dấu là rác';
$lang['lead_unmark_as_junk']   = 'Bỏ đánh dấu là rác';
$lang['lead_marked_as_junk']   = 'Đánh dấu mục tiêu rác thành công';
$lang['lead_unmarked_as_junk'] = 'Bỏ đánh dấu mục tiêu rác thành công';

$lang['lead_not_found']                                                      = 'Không tìm ra mục tiêu';
$lang['lead_lost']                                                           = 'Mất liên lạc';
$lang['lead_junk']                                                           = 'Rác';
$lang['leads_not_assigned']                                                  = 'Chưa được chỉ định';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Ẩn với khách';
$lang['contract_edit_overview']                                              = 'Tổng quan hợp đồng';
$lang['contract_attachments']                                                = 'Tập tin đính kèm';
# Tasks
$lang['task_view_make_public']                                               = 'Để công khai';
$lang['task_is_private']                                                     = 'Phân công riêng tư';
$lang['task_finished']                                                       = 'Đã hoàn thành';
$lang['task_single_related']                                                 = 'Có liên quan';
$lang['task_unmark_as_complete']                                             = 'Bỏ hoàn thành';
$lang['task_unmarked_as_complete']                                           = 'Phân công đã được bỏ hoàn thành';
$lang['task_relation']                                                       = 'Có liên quan';
$lang['task_public']                                                         = 'Công khai';
$lang['task_public_help']                                                    = 'Nếu bạn đặt công khai thì phân công này sẽ hiển thị với tất cả mọi người. Còn không sẽ chỉ hiển thị với nhân viên được chỉ định, người theo dõi, người tạo hoặc người quản lý';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Xuất văn bản PDF khách hàng từ khu vực admin sang ngôn ngữ khách hàng';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Nếu chọn Có cho chức năng này và ví dụ ngôn ngữ mặc định của hệ thống là tiếng Anh còn khách hàng đặt tiếng Pháp, thì văn bản PDF sẽ được xuất theo ngôn ngữ khách hàng đã chọn';
$lang['settings_cron_surveys']                                               = 'Các cuộc thăm dò';
$lang['settings_default_tax']                                                = 'Thuế mặc định';
$lang['setup_calendar_by_departments']                                       = 'Thiết lập lịch theo phòng ban';
$lang['settings_calendar']                                                   = 'Lịch';
$lang['settings_sales_invoice_due_after']                                    = 'Hóa đơn chốt hạn sau (ngày)';
$lang['settings_google_api']                                                 = 'Mã Google API';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Đây là lịch chuẩn của công ty. Tất cả sự kiện từ lịch này sẽ được hiển thị. Nếu bạn muốn đặt riêng 1 bộ lịch dựa trên các phòng ban thì có thể thao tác trong Google Calendar ID của phòng ban.';

$lang['show_on_calendar']                  = 'Hiển thị trên lịch';
$lang['show_invoices_on_calendar']         = 'Hóa đơn';
$lang['show_estimates_on_calendar']        = 'Báo giá';
$lang['show_contracts_on_calendar']        = 'Hợp đồng';
$lang['show_tasks_on_calendar']            = 'Phân công';
$lang['show_customer_reminders_on_calendar'] = 'Nhắc nhở khách hàng';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Sao chép các mục tự tạo vào tiểu sử khách hàng';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Nếu có bất kì mục nào không tồn tại cho khách hàng thì hệ thống sẽ tự tạo ra mục tương ứng mang cùng tên, nếu không thì sẽ chỉ sao chép giá trị từ tiểu sử mục tiêu.';
$lang['lead_profile']                                                = 'Tiểu sử';
$lang['lead_is_client']                                              = 'Khách hàng';
$lang['leads_kan_ban_notes_title']                                   = 'Ghi chú';
$lang['leads_email_integration_folder_no_encryption']                = 'Không mã hóa';
$lang['leads_email_integration']                                     = 'Tích hợp email';
$lang['leads_email_active']                                          = 'Kích hoạt';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Địa chỉ email (Đăng nhập)';
$lang['leads_email_integration_password']                            = 'Mật khẩu';
$lang['leads_email_integration_default_source']                      = 'Nguồn mặc định';
$lang['leads_email_integration_check_every']                         = 'Kiểm tra mỗi (phút)';
$lang['leads_email_integration_default_assigned']                    = 'Chịu trách nhiệm cho mục tiêu mới';
$lang['leads_email_encryption']                                      = 'Mã hóa';
$lang['leads_email_integration_updated']                             = 'Đã cập nhật tích hợp email';
$lang['leads_email_integration_default_status']                      = 'Trạng thái mặc định';
$lang['leads_email_integration_folder']                              = 'Thư mục';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Tông báo khi có mục tiêu được nhập';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Chỉ kiểm tra thư chưa được mở';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Hệ thống sẽ tự động chuyển thư sang trạng thái đã xem sau khi kiểm tra, nhằm tránh việc mở đi mở lại thư cũ nhiều lần. Không khuyến khích bỏ tick chức năng này nếu bạn có quá nhiều thư và thiết lập quá nhiều chuyển tiếp đến email bạn đã thiết lập trong Khách tìm năng';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Thông báo nếu mục tiêu gửi thư nhiều lần';
$lang['leads_email_integration_test_connection']                     = 'Kiểm tra đường truyền IMAP';
$lang['lead_email_connection_ok']                                    = 'Đường truyền IMAP ổn định';
$lang['lead_email_connection_not_ok']                                = 'Đường truyền IMAP không ổn định';
$lang['lead_email_activity']                                         = 'Hoạt động email';
$lang['leads_email_integration_notify_roles']                        = 'Vị trí cần thông báo';
$lang['leads_email_integration_notify_staff']                        = 'Nhân viên cần thông báo';
$lang['lead_public']                                                 = 'Công khai';
# Knowledge Base

$lang['kb_group_color']                = 'Màu';
$lang['kb_group_order']                = 'Thứ tự';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Xuất tập tin PDF lớn';
$lang['bulk_export_pdf_payments']      = 'Thanh toán';
$lang['bulk_export_pdf_estimates']     = 'Báo giá';
$lang['bulk_export_pdf_invoices']      = 'Hóa đơn';
$lang['bulk_pdf_export_button']        = 'Xuất';
$lang['bulk_pdf_export_select_type']   = 'Chọn loại';
$lang['no_data_found_bulk_pdf_export'] = 'Không tìm thấy dữ liệu để xuất file';
$lang['bulk_export_status_all']        = 'Tất cả';
$lang['bulk_export_status']            = 'Trạng thái';
$lang['bulk_export_zip_payment_modes'] = 'Thanh toán được thực hiện bởi';
$lang['bulk_export_include_tag']       = 'Thẻ được gắn kèm';
$lang['bulk_export_include_tag_help']  = 'Ví dụ: Nguyên bản hay Sao chép. Thẻ sẽ được xuất kèm trong tập tin PDF. Khuyến khích chỉ sử dụng 1 thẻ';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Không tìm thấy phản hồi đã tạo trước';
## Clients area
$lang['clients_contract_attachments']  = 'Tập tin đính kèm';
# Backup
$lang['backup_type_full']              = 'Bản dự phòng đầy đủ';
$lang['backup_type_db']                = 'Cơ sở dữ liệu dự phòng';

$lang['auto_backup_options_updated']     = 'Chức năng sao dự phòng tự động đã được cập nhật';
$lang['auto_backup_every']               = 'Tạo bản dự phòng sau mỗi X ngày';
$lang['auto_backup_enabled']             = 'Kích hoạt (yêu cầu CRON)';
$lang['auto_backup']                     = 'Tự động dự phòng';
$lang['backup_delete']                   = 'Đã xóa bản dự phòng';
$lang['create_backup']                   = 'Tạo bản dự phòng';
$lang['backup_success']                  = 'Đã tạo bản dự phòng thành công';
$lang['utility_backup']                  = 'Cơ sở dữ liệu dự phòng';
$lang['utility_create_new_backup_db']    = 'Tạo cơ sở dữ liệu dự phòng';
$lang['utility_backup_table_backupname'] = 'Bản dự phòng';
$lang['utility_backup_table_backupsize'] = 'Dung lượng';
$lang['utility_backup_table_backupdate'] = 'Ngày';
$lang['utility_db_backup_note']          = 'Lưu ý: giới hạn của tốc độ xử lý và bộ nhớ PHP không cho phép sao lưu dữ liệu có dung lượng quá lớn. Nếu dữ liệu của bạn quá lớn, bạn sẽ cần sao lưu trực tiếp từ máy chủ SQL thông qua dòng lệnh, hoặc nhờ đến người quản trị nếu bạn không có thẩm quyền.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Đề xuất kế hoạch';
$lang['clients_nav_support']   = 'Hỗ trợ';
# General
$lang['more']                  = 'Xem thêm';
$lang['add_item']              = 'Thêm mục mới';
$lang['goto_admin_area']       = 'Đi đến khu vực admin';
$lang['click_here_to_edit']    = 'Ấn để sửa';
$lang['delete']                = 'Xóa %s';
$lang['welcome_top']           = 'Xin chào %s';

# Customers
$lang['customer_permissions']         = 'Quyền hạn';
$lang['customer_permission_invoice']  = 'Hóa đơn';
$lang['customer_permission_estimate'] = 'Báo giá';
$lang['customer_permission_proposal'] = 'Đề xuất kế hoạch';
$lang['customer_permission_contract'] = 'Hợp đồng';
$lang['customer_permission_support']  = 'Hỗ trợ';


#Tasks
$lang['task_related_to'] = 'Liên quan đến';

# Send file
$lang['custom_file_fail_send']    = 'Gửi tập tin thất bại';
$lang['custom_file_success_send'] = 'Tập tin được gửi đến %s thành công';
$lang['send_file_subject']        = 'Chủ đề email';
$lang['send_file_email']          = 'Địa chỉ email';
$lang['send_file_message']        = 'Nội dung';
$lang['send_file']                = 'Gửi tập tin';
$lang['add_checklist_item']       = 'Đánh dấu tiến trình';
$lang['task_checklist_items']     = 'Đánh dấu tiến trình';

# Import
$lang['default_pass_clients_import'] = 'Mật khẩu mặc định cho tất cả liên hệ';
$lang['simulate_import']             = 'Mô phỏng dữ liệu nhập vào';
$lang['import_upload_failed']        = 'Đăng tải thất bại';
$lang['import_total_imported']       = 'Tổng số đã nhập: %s';
$lang['import_leads']                = 'Nhập Khách tìm năng';
$lang['import_customers']            = 'Nhập khách hàng';
$lang['choose_csv_file']             = 'Chọn tập tin CSV';
$lang['import']                      = 'Nhập tập tin';
$lang['lead_import_status']          = 'Trạng thái';
$lang['lead_import_source']          = 'Nguồn';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Đề xuất kế hoạch';

# Invoices
$lang['delete_invoice'] = 'Xóa';

# Calendar
$lang['calendar_lead_reminder'] = 'Nhắc nhở mục tiêu';

$lang['items']      = 'Sản phẩm';
$lang['support']    = 'Hỗ trợ';
$lang['new_ticket'] = 'Yêu cầu mới';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Thêm nhắc nhở khách hàng';
$lang['lead_set_reminder_title']        = 'Thêm nhắc nhở Khách tìm năng';
$lang['set_reminder_tooltip']           = 'Chức năng này cho phép bạn không bao giờ quên mọi thứ về khách hàng.';
$lang['client_reminders_tab']           = 'Nhắc nhở';
$lang['leads_reminders_tab']            = 'Nhắc nhở';

# Tickets
$lang['delete_ticket_reply']  = 'Xóa phản hồi';
$lang['ticket_priority_edit'] = 'Sửa mức độ ưu tiên';
$lang['ticket_priority_add']  = 'Thêm mức độ ưu tiên';
$lang['ticket_status_edit']   = 'Sửa trạng thái yêu cầu';
$lang['ticket_service_edit']  = 'Sửa dịch vụ yêu cầu';
$lang['edit_department']      = 'Sửa phòng ban';

# Expenses
$lang['edit_expense_category']                                    = 'Sửa phân loại Chi phí';
# Settings
$lang['customer_default_country']                                 = 'Quốc gia mặc định';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Yêu cầu khách hàng đăng nhập để xem báo giá';
$lang['set_reminder']                                             = 'Đặt nhắc nhở';
$lang['set_reminder_date']                                        = 'Ngày cần thông báo';
$lang['reminder_description']                                     = 'Đặt mô tả';
$lang['reminder_notify_me_by_email']                              = 'Gửi email cho cả nhắc nhở này';
$lang['reminder_added_successfully']                               = 'Đã thêm nhắc nhở thành công. Bạn sẽ được thông báo kịp thời.';
$lang['reminder_description']                                     = 'Mô tả';
$lang['reminder_date']                                            = 'Ngày';
$lang['reminder_staff']                                           = 'Nhắc nhở';
$lang['reminder_is_notified']                                     = 'Được thông báo?';
$lang['reminder_is_notified_boolean_no']                          = 'Không';
$lang['reminder_is_notified_boolean_yes']                         = 'Có';
$lang['reminder_set_to']                                          = 'Chuyển nhắc nhở sang';
$lang['reminder_deleted']                                         = 'Đã xóa nhắc nhở thành công';
$lang['reminder_failed_to_delete']                                = 'Xóa nhắc nhở không thành công';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Hiển thị trạng thái hóa đơn/báo giá trên tập tin PDF';
$lang['email_piping_default_priority']                            = 'Mức độ ưu tiên mặc định cho yêu cầu liên kết';
$lang['show_lead_reminders_on_calendar']                          = 'Nhắc nhở Khách tìm năng';
$lang['tickets_piping']                                           = 'Email liên kết';
$lang['email_piping_only_replies']                                = 'Chỉ những phản hồi được email cho phép';
$lang['email_piping_only_registered']                             = 'Chỉ liên kết với người dùng đã đăng kí';

# Estimates
$lang['view_estimate_as_client']         = 'Xem bản báo giá với tư cách khách';
$lang['estimate_mark_as']                = 'Đánh dấu là %s';
$lang['estimate_status_changed_success'] = 'Trạng thái báo giá đã thay đổi';
$lang['estimate_status_changed_fail']    = 'Thay đổi trạng thái báo giá không thành công';
$lang['estimate_email_link_text']        = 'Xem bản báo giá';

# Proposals
$lang['proposal_to']                            = 'Công ty / Tên';
$lang['proposal_date']                          = 'Ngày';
$lang['proposal_address']                       = 'Địa chỉ';
$lang['proposal_phone']                         = 'Điện thoại';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Ngày tạo';
$lang['proposal_open_till']                     = 'Ngày chốt';
$lang['proposal_status_open']                   = 'Đang mở';
$lang['proposal_status_accepted']               = 'Đã chấp thuận';
$lang['proposal_status_declined']               = 'Đã từ chối';
$lang['proposal_status_sent']                   = 'Đã gửi';
$lang['proposal_expired']                       = 'Đã hết hạn';
$lang['proposal_subject']                       = 'Chủ đề';
$lang['proposal_total']                         = 'Tổng cộng';
$lang['proposal_status']                        = 'Trạng thái';
$lang['proposals_list_all']                     = 'Tất cả';
$lang['proposals_leads_related']                = 'Tất cả mục tiêu có liên quan';
$lang['proposals_customers_related']            = 'Tất cả khách hàng có liên quan';
$lang['proposal_related']                       = 'Liên quan';
$lang['proposal_for_lead']                      = 'Mục tiêu';
$lang['proposal_for_customer']                  = 'Khách hàng';
$lang['proposal']                               = 'Đề xuất kế hoạch';
$lang['proposal_lowercase']                     = 'đề xuất kế hoạch';
$lang['proposals']                              = 'Đề xuất kế hoạch';
$lang['proposals_lowercase']                    = 'đề xuất kế hoạch';
$lang['new_proposal']                           = 'Đề xuất kế hoạch mới';
$lang['proposal_currency']                      = 'Đơn vị tiền';
$lang['proposal_allow_comments']                = 'Cho phép bình luận';
$lang['proposal_allow_comments_help']           = 'Nếu bạn tick chọn chức năng này, khách hàng xem đề xuất sẽ được quyền đăng bình luận.';

$lang['proposal_edit']                          = 'Sửa';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Gửi đến email';
$lang['proposal_send_to_email_title']           = 'Gửi đề xuất qua email';
$lang['proposal_attach_pdf']                    = 'Đính kèm tập tin PDF';
$lang['proposal_preview_template']              = 'Mẫu xem trước';
$lang['proposal_view']                          = 'Xem đề xuất kế hoạch';
$lang['proposal_copy']                          = 'Sao chép';
$lang['proposal_delete']                        = 'Xóa';
$lang['proposal_to']                            = 'Đến';
$lang['proposal_add_comment']                   = 'Thêm bình luận';
$lang['proposal_sent_to_email_success']         = 'Gửi đề xuất đến email thành công';
$lang['proposal_sent_to_email_fail']            = 'Gửi đề xuất đến email không thành công';
$lang['proposal_copy_fail']                     = 'Sao chép đề xuất không thành công';
$lang['proposal_copy_success']                  = 'Sao chép đề xuất thành công';
$lang['proposal_status_changed_success']        = 'Thay đổi trạng thái đề xuất thành công';
$lang['proposal_status_changed_fail']           = 'Thay đổi trạng thái đề xuất không thành công';
$lang['proposal_assigned']                      = 'Đã chỉ định';
$lang['proposal_comments']                      = 'Bình luận';
$lang['proposal_convert']                       = 'Chuyển đổi';
$lang['proposal_convert_estimate']              = 'Báo giá';
$lang['proposal_convert_invoice']               = 'Hóa đơn';
$lang['proposal_convert_to_estimate']           = 'Chuyển đổi sang báo giá';
$lang['proposal_convert_to_invoice']            = 'Chuyển đổi sang hóa đơn';
$lang['proposal_convert_to_lead_disabled_help'] = 'Bạn cần chuyển đổi mục tiêu sang khách hàng nếu muốn tạo %s';
$lang['proposal_convert_not_related_help']      = 'Đề xuất kế hoạch phải liên quan đến khách hàng nếu muốn chuyển đổi sang %s';
$lang['proposal_converted_to_estimate_success'] = 'Chuyển đổi đề xuất sang báo giá thành công';
$lang['proposal_converted_to_invoice_success']  = 'Chuyển đổi đề xuất sang hóa đơn thành công';
$lang['proposal_converted_to_estimate_fail']    = 'Chuyển đổi đề xuất sang báo giá không thành công';
$lang['proposal_converted_to_invoice_fail']     = 'Chuyển đổi đề xuất sang hóa đơn không thành công';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Tổng cộng %s';
$lang['proposal_accept_info']  = 'Chấp thuận';
$lang['proposal_decline_info'] = 'Từ chối';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Đặt lại';
$lang['customer_reset_password_heading']  = 'Đặt lại mật khẩu';
$lang['customer_forgot_password_heading'] = 'Quên mật khẩu';
$lang['customer_forgot_password']         = 'Quên mật khẩu?';
$lang['customer_reset_password']          = 'Mật khẩu';
$lang['customer_reset_password_repeat']   = 'Nhập lại mật khẩu';
$lang['customer_forgot_password_email']   = 'Địa chỉ email';
$lang['customer_forgot_password_submit']  = 'Gửi đi';
$lang['customer_ticket_subject']          = 'Chủ đề';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Đề xuất kế hoạch';

# Tasks
$lang['add_task_attachments']                 = 'Tập tin đính kèm';
$lang['task_view_attachments']                = 'Tập tin đính kèm';
$lang['task_view_description']                = 'Mô tả';

# Customer Groups
$lang['customer_group_add_heading']  = 'Thêm nhóm khách hàng mới';
$lang['customer_group_edit_heading'] = 'Chỉnh sửa nhóm khách hàng';
$lang['new_customer_group']          = 'Nhóm khách hàng mới';
$lang['customer_group_name']         = 'Tên';
$lang['customer_groups']             = 'Nhóm';
$lang['customer_group']              = 'Nhóm khách hàng';
$lang['customer_group_lowercase']    = 'nhóm khách hàng';

$lang['customer_have_invoices_by']       = 'Chứa hóa đơn mang trạng thái %s';
$lang['customer_have_estimates_by']      = 'Chứa báp giá mang trạng thái %s';
$lang['customer_have_contracts_by_type'] = 'Chứa hợp đồng theo loại %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Hiển thị trên danh sách';
$lang['custom_field_show_on_client_portal']      = 'Hiển thị trên trang khách hàng';
$lang['custom_field_show_on_client_portal_help'] = 'Nếu tick chọn mục này thì sẽ hiển thị trong danh sách';
$lang['custom_field_visibility']                 = 'Mức độ hiển thị';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Bạn có thể thêm chuỗi dịch thuật tại đây. Để nếu nhân viên/hệ thống đặt ngôn ngữ khác với mặc định thì các mục trong menu sẽ được xuất dưới ngôn ngữ của nhân viên. Nếu chuỗi không tồn tại trong tập tin dịch thuật thì hệ thống sẽ lấy chuỗi bạn đã nhập tại đây.';
$lang['utilities_menu_icon']                = 'Icon';
$lang['active_menu_items']                  = 'Các mục khả dụng trong menu';
$lang['inactive_menu_items']                = 'Các mục không khả dụng trong menu';
$lang['utilities_menu_permission']          = 'Thẩm quyền';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Tên';
$lang['utilities_menu_save']                = 'Lưu lại menu';

# Knowledge Base
$lang['view_articles_list']     = 'Xem bài viết';
$lang['view_articles_list_all'] = 'Tất cả bài viết';
$lang['als_add_article']        = 'Thêm bài viết';
$lang['als_all_articles']       = 'Các bài viết';
$lang['als_kb_groups']          = 'Nhóm';

# Customizer Menu
$lang['menu_builder']            = 'Thiết lập menu';
$lang['main_menu']               = 'Menu chính';
$lang['setup_menu']              = 'Thiết lập menu';
$lang['utilities_menu_url_help'] = '%s được gắn kèm tự động vào url';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Lọc yêu cầu rác';
$lang['spam_filter']                  = 'Lọc yêu cầu rác';
$lang['new_spam_filter']              = 'Bộ lọc mới';
$lang['spam_filter_blocked_senders']  = 'Người gửi bị chặn';
$lang['spam_filter_blocked_subjects'] = 'Chủ đề bị chặn';
$lang['spam_filter_blocked_phrases']  = 'Các cụm từ bị chặn';
$lang['spam_filter_content']          = 'Nội dung';
$lang['spamfilter_edit_heading']      = 'Sửa bộ lọc thư rác';
$lang['spamfilter_add_heading']       = 'Thêm bộ lọc thư rác';
$lang['spamfilter_type']              = 'Loại';
$lang['spamfilter_type_subject']      = 'Chủ đề';
$lang['spamfilter_type_sender']       = 'Người gửi';
$lang['spamfilter_type_phrase']       = 'Cụm từ';

# Tickets
$lang['block_sender']               = 'Chặn người gửi';
$lang['sender_blocked']             = 'Người gửi đã bị chặn';
$lang['sender_blocked_successfully'] = 'Đẵ chặn người gửi thành công';
$lang['ticket_date_created']        = 'Ngày tạo';

#KB
$lang['edit_kb_group']             = 'Sửa nhóm';
# Leads
$lang['edit_source']               = 'Sửa nguồn';
$lang['edit_status']               = 'Sửa trạng thái';
# Contacts
$lang['contract_type_edit']        = 'Sửa loại hợp đồng';
# Reports
$lang['report_by_customer_groups'] = 'Tổng thu nhập từ các nhóm khách hàng';
#Utilities
$lang['ticket_pipe_log']           = 'Ghi chép yêu cầu hỗ trợ';
$lang['ticket_pipe_name']          = 'Từ tên';
$lang['ticket_pipe_email_to']      = 'Đến';
$lang['ticket_pipe_email']         = 'Từ email';
$lang['ticket_pipe_subject']       = 'Chủ đề';
$lang['ticket_pipe_message']       = 'Nội dung';
$lang['ticket_pipe_date']          = 'Ngày';
$lang['ticket_pipe_status']        = 'Trạng thái';

# Home
$lang['home_latest_activity']       = 'Hoạt động cuối';
$lang['home_my_tasks']              = 'Phân công của tôi';
$lang['home_latest_activity']       = 'Hoạc động cuối';
$lang['home_my_todo_items']         = 'Nhắc nhở công việc của tôi';
$lang['home_widget_view_all']       = 'Xem tất cả';
$lang['home_stats_full_report']     = 'Báo cáo đầy đủ';

# Validation

$lang['form_validation_required']    = 'Mục {field} là bắt buộc.';
$lang['form_validation_valid_email'] = 'Mục {field} phải chứa địa chỉ email hợp lệ.';
$lang['form_validation_matches']     = 'Mục {field} không tương ứng với mục {param}.';
$lang['form_validation_is_unique']   = 'Mục {field} phải chứa giá trị duy nhất.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Sự kiện hôm nay - %s ...';
$lang['not_event_public'] = 'Sự kiện chung bắt đầu hôm nay - %s ...';
$lang['not_contract_expiry_reminder'] = 'Nhắc nhở hết hạn hợp đồng - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Hoạt động gửi thu chi định kỳ của Cron Job';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Hoạt động gửi hóa đơn định kỳ của Cron Job';
$lang['not_recurring_total_renewed'] = 'Tổng số được làm mới: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Hành động được thực hiện dựa trên Chi phí định kỳ';
$lang['not_invoice_created'] = 'Hóa đơn đã tạo:';
$lang['not_invoice_renewed'] = 'Hóa đơn được làm mới:';
$lang['not_expense_renewed'] = 'Chi phí được làm mới:';
$lang['not_invoice_sent_to_customer'] = 'Hóa đơn đã gửi đến khách hàng: %s';
$lang['not_invoice_sent_yes'] = 'Có';
$lang['not_invoice_sent_not'] = 'Không';
$lang['not_action_taken_from_recurring_invoice'] = 'Hành động được thực hiện dựa trên hóa đơn định kỳ:';
$lang['not_new_reminder_for'] = 'Nhắc nhở mới cho %s';
$lang['not_received_one_or_more_messages_lead'] = 'Đã nhận thêm 1 thư mới từ mục tiêu';
$lang['not_received_lead_imported_email_integration'] = 'Mục tiêu đã nhập từ tích hợp email';
$lang['not_lead_imported_attachment'] = 'Tập tin đính kèm đã nhập trong email';
$lang['not_estimate_status_change'] = 'Tập tin đính kèm đã nhập trong email';
$lang['not_estimate_status_updated'] = 'Trạng thái báo giá đã cập nhật: từ %s sang %s';
$lang['not_goal_message_success'] = 'Chúc mừng! Chúng ta đã đạt được mục tiêu mới.<br /> Loại mục tiêu: %s
<br />Thành tựu: %s
<br />Số thành tựu tổng cộng: %s
<br />Ngày bắt đầu: %s
<br />Ngày kết thúc: %s';
$lang['not_assigned_lead_to_you'] = 'đã chỉ định Khách tìm năng %s cho bạn';
$lang['not_lead_activity_assigned_to'] = '%s được chỉ định cho %s';
$lang['not_lead_activity_attachment_deleted'] = 'Tập tin đính kèm đã xóa';
$lang['not_lead_activity_status_updated'] = '%s đã cập nhật trạng thái mục tiêu từ %s sang %s';
$lang['not_lead_activity_contacted'] = '%s đã liên hệ mục tiêu này vào ngày %s';
$lang['not_lead_activity_created'] = '%s đã tạo mục tiêu';
$lang['not_lead_activity_marked_lost'] = 'Đánh dấu là mất liên lạc';
$lang['not_lead_activity_unmarked_lost'] = 'Bỏ đánh dấu mất liên lạc';
$lang['not_lead_activity_marked_junk'] = 'Đánh dấu là rác';
$lang['not_lead_activity_unmarked_junk'] = 'Bỏ đánh dấu rác';
$lang['not_lead_activity_added_attachment'] = 'Tập tin đính kèm đã thêm';
$lang['not_lead_activity_converted_email'] = 'Email mục tiêu đã được đổi. Email mục tiêu ban đầu là: %s và được chuyển thành khách hàng với email %s';
$lang['not_lead_activity_converted'] = '%s đã chuyển đổi mục tiêu này sang khách hàng';
$lang['not_liked_your_post'] = '%s đã thích bài viết %s ... của bạn';
$lang['not_commented_your_post'] = '%s đã bình luận bài viết %s ... của bạn';
$lang['not_liked_your_comment'] = '%s đã thích bình luận %s ... của bạn';
$lang['not_proposal_assigned_to_you'] = 'Đề xuất kế hoạch đã được chỉ định cho bạn - %s ...';
$lang['not_proposal_comment_from_client'] = 'Bình luận mới từ khách hàng trên bản đề xuất %s ...';
$lang['not_proposal_proposal_accepted'] = 'Đề xuất được chấp thuận';
$lang['not_proposal_proposal_declined'] = 'Đề xuất bị từ chối';
$lang['not_task_added_you_as_follower'] = 'đã xếp bạn vào người theo dõi trong công việc %s ...';
$lang['not_task_added_someone_as_follower'] = 'đã xếp %s vào người theo dõi trong công việc %s ...';
$lang['not_task_added_himself_as_follower'] = 'đã xếp anh/cô ấy vào người theo dõi trong công việc %s ...';
$lang['not_task_assigned_to_you'] = 'đã chỉ định bạn phân công %s ...';
$lang['not_task_assigned_someone'] = 'đã chỉ định %s việc %s ...';
$lang['not_task_will_do_user'] = 'sẽ thi hành phân công %s ...';
$lang['not_task_new_attachment'] = 'Đã thêm tập tin đính kèm mới';
$lang['not_task_marked_as_complete'] = 'đã đánh dấu hoàn thành phân công %s';
$lang['not_task_unmarked_as_complete'] = 'đã bỏ đánh dấu hoàn thành phân công %s';
$lang['not_ticket_assigned_to_you'] = 'Yêu cầu được chỉ định cho bạn - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Yêu cầu được chỉ định lại cho bạn - %s ...';
$lang['not_estimate_customer_accepted'] = 'Chúc mừng! Khách hàng đã chấp thuận bản báo giá số %s';
$lang['not_estimate_customer_declined'] = 'Khách hàng đã từ chối bản báo giá số %s';
$lang['estimate_activity_converted'] = 'đã chuyển đổi báo giá này sang hóa đơn.<br /> %s';
$lang['estimate_activity_created'] = 'Bản báo giá đã tạo';
$lang['invoice_estimate_activity_removed_item'] = 'Đã gỡ bỏ mục <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Số báo giá đã chuyển từ %s sang %s';
$lang['invoice_activity_number_changed'] = 'Số hóa đơn đã chuyển từ %s sang %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'đã cập nhật mô tả ngắn từ %s sang %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'đã cập nhật mô tả dài từ <b>%s</b> sang <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'đã cập nhật giá từ %s sang %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'đã cập nhật số lượng <b>%s</b> từ %s sang %s';
$lang['invoice_estimate_activity_added_item'] = 'đã thêm mục mới <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'đã gửi báo giá cho khách hàng';
$lang['estimate_activity_client_accepted_and_converted'] = 'Khách hàng đã chấp thuận bản báo giá này. Bản báo giá sẽ được chuyển đổi sang hóa đơn mang số %s';
$lang['estimate_activity_client_accepted'] = 'Khách hàng đã chấp thuận báo giá này';
$lang['estimate_activity_client_declined'] = 'Khách hàng đã từ chối báo giá này';
$lang['estimate_activity_marked'] = 'đánh dấu bản báo giá là %s';
$lang['invoice_activity_status_updated'] = 'Đã cập nhật trạng thái hóa đơn từ %s sang %s';
$lang['invoice_activity_created'] = 'đã tạo hóa đơn';
$lang['invoice_activity_from_expense'] = 'chuyển đổi thu chi sang hóa đơn';
$lang['invoice_activity_recurring_created'] = '[Recurring] Hóa đơn được tạo bởi CRON';
$lang['invoice_activity_recurring_from_expense_created'] = '[Invoice From Expense] Hóa đơn được tạo bởi CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Hóa đơn đã gửi đến khách hàng bởi CRON';
$lang['invoice_activity_sent_to_client'] = 'đã gửi hóa đơn đến khách hàng';
$lang['invoice_activity_marked_as_sent'] = 'đánh dấu hóa đơn là đã gửi';
$lang['invoice_activity_payment_deleted'] = 'đã xóa thanh toán cho hóa đơn. Thanh toán #%s, số tiền tổng cộng %s';
$lang['invoice_activity_payment_made_by_client'] = 'Khách hàng đã thanh toán hóa đơn từ tổng số <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'đã ghi lại thanh toán từ tổng số <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Đã thêm tập tin đính kèm';

# Navigation
$lang['top_search_placeholder'] = 'Tìm kiếm...';

# Staff
$lang['staff_profile_inactive_account'] = 'Tài khoản của nhân viên này không hoạt động';

# Estimates
$lang['copy_estimate'] = 'Sao chép báo giá';
$lang['estimate_copied_successfully'] = 'Đã sao chép báo giá thành công';
$lang['estimate_copied_fail'] = 'Sao chép báo giá không thành công';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Các phân công được chỉ định cho tôi';
$lang['tasks_view_follower_by_user'] = 'Các phân công tôi đang theo dõi';
$lang['no_tasks_found'] = 'Không tìm thấy phân công nào';

# Leads
$lang['leads_dt_datecreated'] = 'Đã tạo';
$lang['leads_sort_by'] = 'Phân loại theo';
$lang['leads_sort_by_datecreated'] = 'Ngày tạo';
$lang['leads_sort_by_kanban_order'] = 'Thứ tự Kan Ban';

# Proposals
$lang['proposal_items_name'] = 'Các đề xuất';
$lang['proposal_items_description'] = 'Mô tả';
$lang['proposal_items_qty'] = 'SLượng';
$lang['proposal_items_rate'] = 'Giá';
$lang['proposal_items_tax'] = 'Thuế';
$lang['proposal_items_amount'] = 'Tổng cộng';

# Authentication
$lang['check_email_for_resetting_password'] = 'Vui lòng kiểm tra email để xem hướng dẫn đặt lại mật khẩu chi tiết hơn';
$lang['inactive_account'] = 'Tài khoản không hoạt động';
$lang['error_setting_new_password_key'] = 'Xảy ra lỗi khi đặt lại mật khẩu';
$lang['password_reset_message'] = 'Đã đặt lại mật khẩu của bạn. Xin hãy đăng nhập!';
$lang['password_reset_message_fail'] = 'Xảy ra lỗi khi đặt lại mật khẩu. Xin hãy thử lại.';
$lang['password_reset_key_expired'] = 'Mã mật khẩu đã hết hạn hoặc người dùng không hợp lệ';
$lang['admin_auth_reset_pass_repeat'] = 'Nhập lại mật khẩu';
$lang['auth_reset_pass_email_not_found'] = 'Không tìm thấy email';
$lang['auth_reset_password_submit'] = 'Đặt lại mật khẩu';

# Settings
$lang['settings_amount_to_words'] = 'Viết thành chữ';
$lang['settings_amount_to_words_desc'] = 'Xuất tổng giá tiền thành chữ trong hóa đơn/bản báo giá';
$lang['settings_amount_to_words_enabled'] = 'Bật';
$lang['settings_total_to_words_lowercase'] = 'Xuất thành chữ thường';
$lang['settings_show_tax_per_item'] = 'Hiển thị thuế trên sản phẩm';

# Reports
$lang['report_sales_months_three_months'] = '3 tháng qua';
$lang['report_invoice_number'] = 'Hóa đơn #';
$lang['report_invoice_customer'] = 'Khách hàng';
$lang['report_invoice_date'] = 'Ngày xuất';
$lang['report_invoice_duedate'] = 'Ngày chốt';
$lang['report_invoice_amount'] = 'Giá';
$lang['report_invoice_amount_with_tax'] = 'Qua thuế';
$lang['report_invoice_amount_open'] = 'Phần chưa thanh toán';
$lang['report_invoice_status'] = 'Trạng thái';
$lang['report_invoice_total_amount_with_tax'] = 'Tổng số kèm thuế';
$lang['report_invoice_total_amount_without_tax'] = 'Tổng số không qua thuế';
$lang['report_invoice_total_taxes'] = 'Thuế';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Thống kế theo trạng thái dự án';
$lang['home_invoice_overview'] = 'Tổng quan hóa đơn';
$lang['home_estimate_overview'] = 'Tổng quan báo giá';
$lang['home_proposal_overview'] = 'Tổng quan đề xuất dự án';
$lang['home_lead_overview'] = 'Tổng quan Khách tìm năng';

$lang['home_my_projects'] = 'Dự án của tôi';
$lang['home_announcements'] = 'Thông báo';

# Settings
$lang['settings_leads_kanban_limit'] = 'Giới hạn hiển thị số dòng Kan Ban của Khách tìm năng cho mỗi trạng thái';
$lang['settings_group_misc'] = 'Khác';
$lang['show_projects_on_calendar'] = 'Dự án';
$lang['settings_media_max_file_size_upload'] = 'Dung lượng tối đa có thể đăng tải lên Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Chỉ cho phép khách hàng/nhân viên thêm/chỉnh sửa bình luận bảng phân công trong 1 giờ đầu tiên (không áp dụng cho người quản lý)';

# Email templates
$lang['email_template_only_domain_email'] = 'Chỉ để email tên miền';

# Announcements
$lang['dismiss_announcement'] = 'Hủy thông báo';
$lang['dismiss_announcement'] = 'Hủy thông báo';
$lang['announcement_from'] = 'Từ:';
$lang['announcement_date'] = 'Ngày đăng: %s';
$lang['announcement_not_found'] = 'Không tìm thấy thông báo';
$lang['announcements_recent'] = 'Các thông báo gần đây';

# General
$lang['zip_invoices'] = 'Zip hóa đơn';
$lang['zip_estimates'] = 'Zip báo giá';
$lang['zip_payments'] = 'Zip thanh toán';
$lang['setup_help'] = 'Trợ giúp';
$lang['clients_list_company'] = 'Công ty';
$lang['dt_button_export'] = 'Xuất ra';

$lang['dt_entries'] = 'các mục';
$lang['invoice_total_paid'] = 'Tổng số đã thanh toán';
$lang['invoice_amount_due'] = 'Số lượng chưa trả';
$lang['report_invoice_discount'] = 'Chiết khấu';

# Calendar
$lang['calendar_project'] = 'Dự án';

# Leads
$lang['leads_import_assignee'] = 'Người chịu trách nhiệm (người đảm nhiệm)';
$lang['customer_from_lead'] = 'Khách hàng từ %s';
$lang['lead_kan_ban_attachments'] = 'Tập tin đính kèm: %s';
$lang['leads_sort_by_lastcontact'] = 'Liên hệ lần cuối';

# Tasks
$lang['task_comment_added'] = 'Đã thêm bình luận thành công';
$lang['task_duedate'] = 'Ngày chốt';
$lang['task_view_comments'] = 'Bình luận';
$lang['task_comment_updated'] = 'Đã cập nhật bình luận';
$lang['task_visible_to_client'] = 'Hiển thị với khách hàng';
$lang['task_hourly_rate'] = 'Tiền công theo giờ';
$lang['hours'] = 'Giờ';
$lang['seconds'] = 'Giây';
$lang['minutes'] = 'Phút';
$lang['task_start_timer'] = 'Bắt đầu tính giờ';
$lang['task_stop_timer'] = 'Dừng tính giờ';
$lang['task_billable_help'] = 'Nếu bạn tick chọn Có xuất biên nhận thì công việc sẽ được hiển thị khi tạo hóa đơn';
$lang['task_billable'] = 'Có thể xuất biên nhận';
$lang['task_billable_yes'] = 'Có';
$lang['task_billable_no'] = 'Không';
$lang['task_billed'] = 'Đã xuất';
$lang['task_billed_yes'] = 'Đã xuất';
$lang['task_billed_no'] = 'Không xuất';
$lang['task_user_logged_time'] = 'Thời gian đăng nhập của bạn:';
$lang['task_total_logged_time'] = 'Tổng thời gian đăng nhập:';
$lang['task_is_billed'] = 'Phân công này được xuất biên nhận trên hóa đơn mang số %s';
$lang['task_statistics'] = 'Thống kê';
$lang['task_milestone'] = 'Cột mốc';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Đã cập nhật tin nhắn thành công';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Phân công dự án không kèm trong danh sách này.';
$lang['show_quantity_as'] = 'Hiển thị số lượng dưới dạng:';
$lang['quantity_as_qty'] = 'SLượng';
$lang['quantity_as_hours'] = 'Giờ';
$lang['invoice_table_hours_heading'] = 'Giờ';
$lang['bill_tasks'] = 'Phân công biên nhận';
$lang['invoice_estimate_sent_to_email'] = 'Gửi đến';

# Estimates
$lang['estimate_table_hours_heading'] = 'Tiếng';

# General
$lang['is_customer_indicator'] = 'Khách hàng';
$lang['print']            = 'In';
$lang['customer_permission_projects']            = 'Dự án';
$lang['no_timers_found']            = 'Không tìm thấy mục đếm thời gian nào';
$lang['timers_started_confirm_logout']            = 'Phát hiện mục tính thời gian đang chạy!<br /><br />Bạn có chắc chắn muốn đăng xuất mà không dừng chức năng lại??';
$lang['confirm_logout']            = 'Đăng xuất';
$lang['timer_top_started']            = 'Bắt đầu như %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'Bạn không thể đổi loại xuất biên nhận. Đã có biên nhận trong dự án này.';
$lang['project_customer_permission_warning'] = 'Hệ thống chỉ định rằng liên hệ cơ bản không có thẩm quyền với các dự án. Liên hệ cơ bản không thể thấy dự án này. Cân nhắc cấp thêm quyền hạn trong tiểu sử của liên hệ.';
$lang['project_invoice_timesheet_start_time'] = 'Thời gian bắt đầu: %s';
$lang['project_invoice_timesheet_end_time'] = 'Thời gian kết thúc: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Thời gian đăng nhập: %s';
$lang['project_view_as_client'] = 'Xem dự án với tư cách khách';
$lang['project_mark_all_tasks_as_completed'] = 'Đánh dấu hoàn thành cho tất cả công việc và dừng tính thời gian (không gửi thông báo cho nhân viên đảm nhiệm dự án)';
$lang['project_not_started_status_tasks_timers_found'] = 'Tính thời gian được bật cho dự án này nhưng trạng thái dự án hiện tại là Chưa bắt đầu. Khuyến khích đổi trạng thái dự án sang Đang thực hiện';
$lang['project_status'] = 'Trạng thái';
$lang['project_status_1'] = 'Chưa bắt đầu';
$lang['project_status_2'] = 'Đang thực hiện';
$lang['project_status_3'] = 'Tạm ngưng';
$lang['project_status_4'] = 'Hoàn thành';

$lang['project_file_uploaded_by_customer'] = 'Khách hàng';
$lang['project_file_dateadded'] = 'Ngày đăng';
$lang['project_file_filename'] = 'Tên tập tin';
$lang['project_file__filetype'] = 'Loại tập tin';
$lang['project_file_visible_to_customer'] = 'Hiển thị với khách hàng';
$lang['project_file_uploaded_by'] = 'Được đăng bởi';
$lang['edit_project'] = 'Sửa dự án';
$lang['copy_project'] = 'Sao chép dự án';
$lang['delete_project'] = 'Xóa dự án';
$lang['project_task_assigned_to_user'] = 'Phân công được chỉ định cho bạn';
$lang['seconds'] = 'Giây';
$lang['hours'] = 'Giờ';
$lang['minutes'] = 'Phút';
$lang['project']                 = 'Dự án';
$lang['project_lowercase']       = 'dự án';
$lang['projects']                = 'Các dự án';
$lang['projects_lowercase']      = 'các dự án';
$lang['project_settings']      = 'Tùy chỉnh dự án';
$lang['project_invoiced_successfully']             = 'Xuất hóa đơn dự án thành công';
$lang['new_project']             = 'Dự án mới';
$lang['project_files']            = 'Các tập tin';
$lang['project_activity']            = 'Hoạt động';
$lang['project_name']            = 'Tên dự án';
$lang['project_description']            = 'Mô tả dự án';
$lang['project_customer']            = 'Khách hàng';
$lang['project_start_date']            = 'Ngày bắt đầu';
$lang['project_datecreated']            = 'Ngày tạo';
$lang['project_deadline']            = 'Hạn chót';
$lang['project_billing_type']            = 'Loại biên nhận';
$lang['project_billing_type_fixed_cost']            = 'Giá cố định';
$lang['project_billing_type_project_hours']            = 'Tính theo thời gian dự án';
$lang['project_billing_type_project_task_hours']            = 'Tính theo thời gian phân công';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Dựa trên tiền công mỗi giờ của công việc';
$lang['project_rate_per_hour']            = 'Tiền công mỗi giờ';
$lang['project_total_cost']            = 'Tổng cộng';
$lang['project_members']            = 'Thành viên thực hiện dự án';
$lang['project_member_removed']     = 'Gỡ bỏ thành viên khỏi dự án thành công';
$lang['project_overview']           = 'Tổng quan dự án';
$lang['project_gant']            = 'Xem biểu đồ Gantt';
$lang['project_milestones']            = 'Cột mốc';
$lang['project_milestone_order']            = 'Thứ tự';
$lang['project_milestone_duedate_passed']            = 'Quá hạn chót';
$lang['record_timesheet']            = 'Biểu đồ thời gian';
$lang['new_milestone']            = 'Cột mốc mới';
$lang['edit_milestone']            = 'Sửa cột mốc';
$lang['milestone_name']            = 'Tên';
$lang['milestone_due_date']            = 'Ngày chốt';
$lang['project_milestone']            = 'Cột mốc';
$lang['project_notes']            = 'Ghi chú';
$lang['project_timesheets']            = 'Biểu đồ thời gian';
$lang['project_timesheet']            = 'Biểu đồ thời gian';
$lang['milestone_total_logged_time']            = 'Thời gian đăng nhập';
$lang['project_overview_total_logged_hours']            = 'Tổng số giờ đăng nhập';
$lang['milestones_uncategorized']            = 'Chưa phân loại';
$lang['milestone_no_tasks_found']            = 'Không tìm thấy phân công nào';
$lang['project_copied_successfully']            = 'Sao chép dữ liệu dự án thành công';
$lang['failed_to_copy_project']            = 'Sao chép dự án không thành công';
$lang['copy_project_task_include_check_list_items']            = 'Sao chép danh sách đánh dấu';
$lang['copy_project_task_include_assignees']            = 'Sao chép người đảm nhận';
$lang['copy_project_task_include_followers']            = 'Sao chép người theo dõi';

$lang['project_days_left']            = 'Ngày còn lại';
$lang['project_open_tasks']            = 'Phân công chưa hoàn thành';
$lang['timesheet_stop_timer']            = 'Dừng tính giờ';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Thêm biểu đồ không thành công. Thời gian kết thúc nhỏ hơn thời gian bắt đầu';
$lang['project_timesheet_user']            = 'Thành viên';
$lang['project_timesheet_start_time']            = 'Thời gian bắt đầu';
$lang['project_timesheet_end_time']            = 'Thời gian kết thúc';
$lang['project_timesheet_time_spend']            = 'Thời gian thực hiện';
$lang['project_timesheet_task']            = 'Phân công';
$lang['project_invoices']                = 'Hóa đơn';
$lang['total_logged_hours_by_staff']            = 'Tổng thời gian đăng nhập';
$lang['invoice_project']            = 'Xuất hóa đơn cho dự án';
$lang['invoice_project_info']            = 'Thông tin hóa đơn của dự án';
$lang['invoice_project_data_single_line']            = 'Một dòng';
$lang['invoice_project_data_task_per_item']            = 'Công việc mỗi mục';
$lang['invoice_project_data_timesheets_individually']            = 'Tách riêng mỗi biểu đồ thời gian';
$lang['invoice_project_item_name_data']            = 'Tên mục';
$lang['invoice_project_description_data']            = 'Mô tả';
$lang['invoice_project_projectname_taskname']            = 'Tên dự án + tên phân công';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Tất cả phân công + tổng thời gian đăng nhập cho mỗi phân công';
$lang['invoice_project_project_name_data']            = 'Tên dự án';
$lang['invoice_project_timesheet_individually_data']            = 'Biểu đồ thời gian bắt đầu + kết thúc + tổng thời gian đăng nhập';
$lang['invoice_project_total_logged_time_data']            = 'Tổng thời gian đăng nhập';

$lang['project_allow_client_to'] = 'Cho phép khách hàng %s';
$lang['project_setting_view_task_attachments'] = 'xem tập tin đính kèm trong phân công';
$lang['project_setting_view_task_checklist_items'] = 'xem danh sách đánh dấu phân công';
$lang['project_setting_upload_files'] = 'tải lên tập tin';
$lang['project_setting_view_task_comments'] = 'xem bình luận của phân công';
$lang['project_setting_upload_on_tasks'] = 'tải tập tin lên phân công';
$lang['project_setting_view_task_total_logged_time'] = 'xem tổng thời gian đăng nhập của phân công';
$lang['project_setting_open_discussions'] = 'mở cuộc trao đổi';
$lang['project_setting_comment_on_tasks'] = 'bình luận trên phân công dự án';
$lang['project_setting_view_tasks'] = 'xem các phân công';
$lang['project_setting_view_milestones'] = 'xem các cột mốc';
$lang['project_setting_view_gantt'] = 'xem biểu đồ Gantt';
$lang['project_setting_view_timesheets'] = 'xem biểu đồ thời gian';
$lang['project_setting_view_activity_log'] = 'xem nhật ký hoạt động';
$lang['project_setting_view_team_members'] = 'xem các thành viên trong nhóm';

$lang['project_discussion_visible_to_customer_yes']                 = 'Hiển thị';
$lang['project_discussion_visible_to_customer_no']                 = 'Không hiển thị';

$lang['project_discussion_posted_on']                 = 'Được đăng trên %s';
$lang['project_discussion_posted_by']                 = 'Được đăng bởi %s';
$lang['project_discussion_failed_to_delete']                 = 'Xóa cuộc trao đổi không thành công';
$lang['project_discussion_deleted']                 = 'Xóa cuộc trao đổi thành công';
$lang['project_discussion_no_activity']                 = 'Không có hoạt động nào';
$lang['project_discussion']                 = 'Trao đổi';
$lang['project_discussions']                 = 'Trao đổi';
$lang['edit_discussion'] = 'Chỉnh sửa cuộc trao đổi';
$lang['new_project_discussion'] = 'Tạo cuộc trao đổi';
$lang['project_discussion_subject'] = 'Chủ đề';
$lang['project_discussion_description'] = 'Mô tả';
$lang['project_discussion_show_to_customer'] = 'Hiển thị cho khách hàng';
$lang['project_discussion_total_comments'] = 'Tổng số bình luận';
$lang['project_discussion_last_activity'] = 'Hoạt động cuối';
$lang['discussion_add_comment'] = 'Thêm bình luận';
$lang['discussion_newest'] = 'Mới nhất';
$lang['discussion_oldest'] = 'Cũ nhất';
$lang['discussion_attachments'] = 'Tập tin đính kèm';
$lang['discussion_send'] = 'Gửi';
$lang['discussion_reply'] = 'Trả lời';
$lang['discussion_edit'] = 'Sửa';
$lang['discussion_edited'] = 'Đã qua chỉnh sửa';
$lang['discussion_you'] = 'Bạn';
$lang['discussion_save'] = 'Lưu';
$lang['discussion_delete'] = 'Xóa';
$lang['discussion_view_all_replies'] = 'Hiển thị tất cả phản hồi';
$lang['discussion_hide_replies'] = 'Ẩn phản hồi';
$lang['discussion_no_comments'] = 'Không có bình luận nào';
$lang['discussion_no_attachments'] = 'Không có tập tin đính kèm';
$lang['discussion_attachments_drop'] = 'Kéo thả để tải lên';
$lang['project_note'] = 'Ghi chú';
$lang['project_note_private'] = 'Ghi chú riêng tư';
$lang['project_save_note'] = 'Lưu ghi chú';

# Project Activity
$lang['project_activity_created'] = 'Đã tạo dự án';
$lang['project_activity_updated'] = 'Đã cập nhật dự án';
$lang['project_activity_removed_team_member'] = 'Đã gỡ bỏ thành viên';
$lang['project_activity_added_team_member'] = 'Đã thêm thành viên mới';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Đánh dấu hoàn thành cho tất cả phân công';
$lang['project_activity_recorded_timesheet'] = 'Biểu đồ thời gian đã ghi';
$lang['project_activity_task_name'] = 'Phân công:';
$lang['project_activity_deleted_discussion'] = 'Đã xóa trao đổi';
$lang['project_activity_created_discussion'] = 'Đã tạo trao đổi';
$lang['project_activity_updated_discussion'] = 'Đã cập nhật trao đổi';
$lang['project_activity_commented_on_discussion'] = 'Đã bình luận trên cuộc trao đổi';
$lang['project_activity_deleted_discussion_comment'] = 'Đã xóa bình luận trên cuộc trao đổi';
$lang['project_activity_deleted_milestone'] = 'Đã xóa cột mốc';
$lang['project_activity_updated_milestone'] = 'Đã cập nhật cột mốc';
$lang['project_activity_created_milestone'] = 'Đã tạo cột mốc mới';
$lang['project_activity_invoiced_project'] = 'Đã xuất hóa đơn dự án';
$lang['project_activity_task_marked_complete'] = 'Đã đánh dấu hoàn thành phân công';
$lang['project_activity_task_unmarked_complete'] = 'Bỏ đánh dấu hoàn thành phân công';
$lang['project_activity_task_deleted'] = 'Đã xóa phân công';
$lang['project_activity_new_task_comment'] = 'Đã bình luận trên phân công';
$lang['project_activity_new_task_attachment'] = 'Tải lên tập tin trên phân công';
$lang['project_activity_new_task_assignee'] = 'Đã thêm người đảm nhiệm mới';
$lang['project_activity_task_assignee_removed'] = 'Gỡ bỏ người đảm nhiện';
$lang['project_activity_task_timesheet_deleted'] = 'Gỡ bỏ biểu đồ thời gian';
$lang['project_activity_uploaded_file'] = 'Đã tải lên tập tin dự án';
$lang['project_activity_status_updated'] = 'Đã cập nhật trạng thái dự án';
$lang['project_activity_visible_to_customer'] = 'Hiển thị với khách hàng';
$lang['project_activity_project_file_removed'] = 'Đã gỡ bỏ tập tin dự án';

# Notifications - Deprecated - THESE notifications are Deprecated and will be removed in further released don't translate them
$lang['not_customer_uploaded_project_file'] = 'New file uploaded';
$lang['not_customer_created_new_project_discussion'] = 'New project discussion created';
$lang['not_customer_commented_on_project_discussion'] = 'New comment on project discussion';

# Customers area
$lang['clients_my_estimates'] = 'Báo giá';
$lang['client_no_reply'] = 'Không có phản hồi';
$lang['clients_nav_projects'] = 'Dự án';
$lang['clients_my_projects'] = 'Dự án';
$lang['client_profile_image'] = 'Ảnh đại diện';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Hóa đơn đã hủy sẽ được loại khỏi báo cáo';
$lang['invoices_merge_cancel_merged_invoices'] = 'Đánh dấu hủy các hóa đơn đã hộp thay vì xóa';
$lang['invoice_marked_as_cancelled_successfully'] = 'Đánh dấu hủy hóa đơn thành công';
$lang['invoice_unmarked_as_cancelled'] = 'Bỏ đánh dấu hủy hóa đơn thành công';

$lang['tasks_reminder_notification_before'] = 'Nhắc nhở hết hạn phân công trong (ngày) nữa';
$lang['not_task_deadline_reminder'] = 'Nhắc nhở hết hạn phân công';
$lang['dt_length_menu_all'] = 'Tất cả';
$lang['task_not_finished'] = 'Chưa hoàn thành';
$lang['task_billed_cant_start_timer'] = 'Phân công đã xuất biên nhận. Không thể thực hiện đếm thời gian';
$lang['invoice_task_billable_timers_found'] = 'Tìm thấy đếm thời gian đã bắt đầu';
$lang['project_timesheet_not_updated'] = 'Không ảnh hưởng đến biểu đồ thời gian';
$lang['project_invoice_task_no_timers_found'] = 'Không tìm thấy mục đếm thời gian cho phân công này';
$lang['invoice_project_tasks_not_started'] = 'Chưa bắt đầu | Ngày bắt đầu: %s';
$lang['invoice_project_see_billed_tasks'] = 'Xem những phân công sẽ xuất biên nhận trên hóa đơn này';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Tất cả những phân công đã xuất biên nhận sẽ được đánh dấu hoàn thành';
$lang['invoice_project_nothing_to_bill'] = 'Hiện không có phân công nào để lập biên nhận. Bạn có thể thêm bất kì mục nào trong danh sách của hóa đơn.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Không thể xuất hóa đơn cho công việc có ngày bắt đầu ở tương lai';
$lang['invoice_project_stop_all_timers'] = 'Dừng tất cả thao tác tính thời gian';
$lang['invoice_project_stop_billable_timers_only'] = 'Chỉ dừng các mục tính thời gian có chấm công';
$lang['project_tasks_total_timers_stopped'] = 'Đã dừng tổng cộng %s mục tính thời gian';
$lang['project_invoice_timers_started'] = 'Tính thời gian đang chạy trên phân công có xuất hóa đơn, không thể tạo biên nhận. Vui lòng dừng tính thời gian để tạo biên nhận.';
$lang['task_start_timer_only_assignee'] = 'Bạn phải được chỉ định phân công này để kích hoạt tính thời gian!';
$lang['task_comments'] = 'Bình luận';
$lang['invoice_total_tax'] = 'Tổng thuế';
$lang['estimates_total_tax'] = 'Tổng thuế';
$lang['report_invoice_total_tax'] = 'Tổng thuế';
$lang['home_tickets'] = 'Yêu cầu hỗ trợ';
$lang['home_project_activity'] = 'Hoạt động dự án cuối cùng';
$lang['home_project_activity_not_found'] = 'Không tìm thấy hoạt động dự án nào';
$lang['view_tracking'] = 'Theo dõi lượt xem';
$lang['view_date'] = 'Ngày';
$lang['view_ip'] = 'Địa chỉ IP';
$lang['article_total_views'] = 'Tổng số lượt xem';
$lang['leads_source'] = 'Nguồn';
$lang['invoices_available_for_merging'] = 'Các hóa đơn có thể gộp';
$lang['invoices_merge_discount'] = 'Bạn sẽ phải áp dụng chiết khấu của tổng số %s cho hóa đơn này theo cách thủ công';
$lang['invoice_merge_number_warning'] = 'Gộp hóa đơn sẽ tạo khoảng trống thứ tự đánh số. Vui lòng không tiến hành gộp nếu bạn không muốn có khoảng trống trong lịch sử hóa đơn. Bạn cũng có thể chỉnh thủ công số thứ tự hóa đơn nếu muốn lấp đầy khoảng trống.';
$lang['invoice_mark_as'] = 'Đánh dấu là %s';
$lang['invoice_unmark_as'] = 'Bỏ đánh dấu là %s';
$lang['invoice_status_cancelled'] = 'Đã hủy';
$lang['tasks_reminder_notification_before_help'] = 'Thông báo hạn chót cho người đảm nhiệm phân công trước X ngày. Thông báo/thư chỉ được gửi cho duy nhất người đảm nhiệm. Nếu khoảng cách giữa ngày bắt đầu và ngày chốt nhỏ hơn nhắc nhở thì hệ thống sẽ không gửi thông báo.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Chọn tất cả phân công';
$lang['lead_company'] = 'Công ty';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Xác nhận';
$lang['task_assigned'] = 'Đã chỉ định cho';
$lang['switch_to_pipeline'] = 'Chuyển sang dạng cột';
$lang['switch_to_list_view'] = 'Chuyển sang dạng danh sách';
$lang['estimates_pipeline'] = 'Cột báo giá';
$lang['estimates_pipeline_sort'] = 'Xếp theo';
$lang['estimates_sort_expiry_date'] = 'Ngày hết hạn';
$lang['estimates_sort_pipeline'] = 'Thứ tự cột';
$lang['estimates_sort_datecreated'] = 'Ngày tạo';
$lang['estimates_sort_estimate_date'] = 'Ngày báo giá';
$lang['estimate_set_reminder_title'] = 'Đặt nhắc nhở báo giá';
$lang['invoice_set_reminder_title'] = 'Đặt nhắc nhở hóa đơn';
$lang['estimate_reminders'] = 'Nhắc nhở';
$lang['invoice_reminders'] = 'Nhắc nhở';
$lang['estimate_notes'] = 'Ghi chú';
$lang['estimate_add_note'] = 'Thêm ghi chú';
$lang['dropdown_non_selected_tex'] = 'Không có mục nào được chọn';
$lang['auto_close_ticket_after'] = 'Tự động khóa yêu cầu hỗ trợ sau (tiếng)';
$lang['event_description'] = 'Mô tả';
$lang['delete_event'] = 'Xóa';
$lang['not_new_ticket_created'] = 'Yêu cầu mới chưa mở trong phòng ban của bạn - %s';
$lang['receive_notification_on_new_ticket'] = 'Nhận thông báo khi có yêu cầu mới chưa mở';
$lang['receive_notification_on_new_ticket_help'] = 'Tất cả nhân viên thuộc phòng ban yêu cầu sẽ được nhận thông báo khi có yêu cầu hỗ trợ mới được mở';
$lang['event_updated'] = 'Đã cập nhật sự kiện thành công';
$lang['customer_contacts'] = 'Liên hệ';
$lang['new_contact'] = 'Liên hệ mới';
$lang['contact'] = 'Liên hệ';
$lang['contact_lowercase'] = 'liên hệ';
$lang['contact_primary'] = 'Liên hệ cơ bản';
$lang['contact_position'] = 'Vị trí';
$lang['contact_active'] = 'Đang hoạt động';
$lang['client_company_info'] = 'Chi tiết công ty';
$lang['proposal_save'] = 'Lưu đề xuất';
$lang['calendar'] = 'Lịch';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'Phông chữ PDF';
$lang['settings_pdf_table_heading_color'] = 'Màu nền đầu mục cột';
$lang['settings_pdf_table_heading_text_color'] = 'Màu chữ đầu mục cột';
$lang['settings_pdf_font_size'] = 'Cỡ chữ mặc định';
$lang['proposal_status_draft'] = 'Nháp';
$lang['custom_field_contacts'] = 'Liên hệ';
$lang['company_primary_email'] = 'Email cơ bản';
$lang['client_register_contact_info'] = 'Thông tin liên hệ cơ bản';
$lang['client_register_company_info'] = 'Thông tin công ty';
$lang['contact_permissions_info'] = 'Xin hãy đảm bảo cấp quyền phù hợp cho liên hệ này';
$lang['default_leads_kanban_sort'] = 'Phân loại Kan Ban mục tiêu mặc định';
$lang['default_leads_kanban_sort_type'] = 'Phân loại';
$lang['order_ascending'] = 'Từ dưới lên';
$lang['order_descending'] = 'Từ trên xuống';
$lang['calendar_expand'] = 'mở rộng';
$lang['proposal_reminders'] = 'Nhắc nhở';
$lang['proposal_set_reminder_title'] = 'Đặt nhắc nhở đề xuất';
$lang['settings_allowed_upload_file_types'] = 'Các dạng tập tin cho phép';
$lang['no_primary_contact'] = 'Khách hàng này không sở hữu liên hệ cơ bản. Bạn cần thiết lập liên hệ cơ bản để đăng nhập với tư cách khách. Khuyến khích nên thiết lập tất cả khách hàng liên hệ cơ bản.';
$lang['leads_merge_customer'] = 'Gộp các mục khách hàng';
$lang['leads_merge_contact'] = 'Gộp các mục liên hệ';
$lang['leads_merge_as_contact_field'] = 'Gộp thành mục liên hệ';
$lang['lead_convert_to_client_phone'] = 'Điện thoại';
$lang['invoice_status_report_all'] = 'Tất cả';
$lang['import_contact_field'] = 'Mục liên hệ';


$lang['file_uploaded_success'] = 'Không phát sinh lỗi nào, tập tin được tải lên thành công';
$lang['file_exceeds_max_filesize'] = 'Tập tin tải lên vượt quá giới hạn upload_max_filesize cho phép trong php.ini';
$lang['file_exceeds_maxfile_size_in_form'] = 'Tập tin tải lên vượt quá giới hạn MAX_FILE_SIZE cho phép được ghi rõ trong HTML';
$lang['file_uploaded_partially'] = 'Tập tin chỉ mới được tải lên một phần';
$lang['file_not_uploaded'] = 'Không có tập tin nào được tải lên';
$lang['file_missing_temporary_folder'] = 'Thiếu mất 1 thư mục tạm thời';
$lang['file_failed_to_write_to_disk'] = 'Chuyển tập tin vào đĩa không thành công.';
$lang['file_php_extension_blocked'] = 'Phần mở rộng PHP ngăn cản việc tải lên tập tin.';
$lang['calendar_expand'] = 'Mở rộng';
$lang['view_pdf'] = 'Xem tập tin PDF';
$lang['expense_repeat_every'] = 'Lặp lại mỗi';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Đổi sang Kan Ban';
$lang['survey_no_questions'] = 'Cuộc thăm dò này chưa có câu hỏi nào.';
$lang['survey_submit'] = 'Gửi đi';
$lang['contract_content'] = 'Hợp đồng';
$lang['contract_save'] = 'Lưu hợp đồng';
$lang['contract_send_to_email'] = 'Gửi đến email';
$lang['contract_send_to_client_modal_heading'] = 'Gửi hợp đồng vào email';
$lang['contract_send_to'] = 'Gửi đến';
$lang['contract_send_to_client_attach_pdf'] = 'Đính kèm tập tin PDF';
$lang['contract_send_to_client_preview_template'] = 'Xem trước email mẫu';
$lang['include_attachments_to_email'] = 'Mang theo tập tin đính kèm vào email';
$lang['contract_sent_to_client_success'] = 'Đã gửi hợp đ6òng đến khách hàng thành công';
$lang['contract_sent_to_client_fail'] = 'Gửi hợp đồng không thành công';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Tên người dùng hoặc mật khẩu không hợp lệ';
$lang['client_old_password_incorrect']     = 'Mật khẩu cũ của bạn không chính xác';
$lang['client_password_changed']          = 'Mật khẩu của bạn đã được đổi';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Tổng số mục tiêu đã xóa: %s';
$lang['total_clients_deleted'] = 'Tổng số khách hàng đã xóa: %s';
$lang['confirm_action_prompt'] = 'Bạn có chắc chắn muốn thực hiện thao tác này?';
$lang['mass_delete'] = 'Xóa diện rộng';
$lang['email_protocol'] = 'Giao thức email';
$lang['add_edit_members'] = 'Thêm/chỉnh sửa thành viên';
$lang['project_overview_logged_hours'] = 'Thời gian đăng nhập:';
$lang['project_overview_billable_hours'] = 'Thời gian có thể xuất biên nhận:';
$lang['project_overview_billed_hours'] = 'Thời gian đã xuất:';
$lang['project_overview_unbilled_hours'] = 'Thời gian chưa xuất:';
$lang['calendar_first_day'] = 'Ngày đầu tiên';
$lang['permission_view'] = 'Xem';
$lang['permission_edit'] = 'Sửa';
$lang['permission_create'] = 'Tạo';
$lang['permission_delete'] = 'Xóa';
$lang['permission'] = 'Quyền hạn';
$lang['permissions'] = 'Các quyền hạn';
$lang['proposals_pipeline'] = 'Cột đề xuất kế hoạch';
$lang['proposals_pipeline_sort'] = 'Xếp theo';
$lang['proposals_sort_open_till'] = 'Có hiệu lực cho đến';
$lang['proposals_sort_pipeline'] = 'Thứ tự xếp cột';
$lang['proposals_sort_datecreated'] = 'Ngày tạo';
$lang['proposals_sort_proposal_date'] = 'Ngày đề xuất';
$lang['is_not_staff_member'] = 'Không phải nhân viên';
$lang['lead_created'] = 'Đã tạo';
$lang['access_tickets_to_none_staff_members'] = 'Cho phép người dùng không phải nhân viên truy cập vào yêu cầu';
$lang['project_expenses'] = 'Thu chi';
$lang['expense_currency'] = 'Đơn vị tiền';
$lang['currency_valid_code_help'] = 'Hãy chắc chắn bạn nhập mã tiền tệ chính xác.';
$lang['week'] = 'Tuần';
$lang['weeks'] = 'Tuần';
$lang['month'] = 'Tháng';
$lang['months'] = 'Tháng';
$lang['year'] = 'Năm';
$lang['years'] = 'Năm';
$lang['expense_report_category'] = 'Phân loại';
$lang['expense_paid_via'] = 'Thanh toán qua %s';
$lang['item_as_expense'] = '[Chi phí]';
$lang['show_help_on_setup_menu'] = 'Hiển thị các thành phần trong thanh hỗ trợ ở mục thiết lập';
$lang['customers_summary_total'] = 'Tổng số khách hàng';
$lang['filter_by'] = 'Được lọc theo';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Mã trang';
$lang['recaptcha_secret_key'] = 'Mã bí mật';
$lang['recaptcha_error'] = 'Mục reCAPTCHA thông báo rằng bạn là robot.';
$lang['smtp_username'] = 'Tên người dùng SMTP';
$lang['smtp_username_help'] = 'Chỉ nhập khi email khách hàng của bạn sử dụng tên người dùng để truy cập SMTP.';
$lang['pinned_project']= 'Dự án đã ghim';
$lang['pin_project']= 'Ghim dự án';
$lang['unpin_project']= 'Tháo ghim dự án';
$lang['smtp_encryption']= 'Mã hóa email';
$lang['smtp_encryption_none']= 'Không';
$lang['show_proposals_on_calendar']= 'Đề xuất kế hoạch';
$lang['invoice_project_see_billed_expenses']= 'Xem những khoản thu chi sẽ được xuất biên nhận trên hóa đơn này';
$lang['project_overview_expenses'] = 'Thu chi tổng cộng';
$lang['project_overview_expenses_billable'] = 'Thu chi có thể xuất biên nhận';
$lang['project_overview_expenses_billed'] = 'Thu chi đã xuất';
$lang['project_overview_expenses_unbilled'] = 'Thu chi chưa xuất';
$lang['announcement_date_list'] = 'Ngày';
$lang['project_setting_view_finance_overview'] = 'Xem tổng quan ngân sách';
$lang['show_all_tasks_for_project_member'] = 'Cho phép tất cả nhân viên xem các phân công liên quan đến dự án (bao gồm cả người ngoài công việc)';
$lang['not_staff_added_as_project_member'] = 'Đã thêm bạn vào thành viên dự án';
$lang['report_expenses_base_currency_select_explanation'] = 'Bạn phải chọn đơn vị tiền vì hệ thống tìm thấy các đơn vị tiền khác nhau trong thu chi của bạn.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Chi phí đã ghi lại';
$lang['save_customer_and_add_contact'] = 'Lưu và tạo liên hệ';
$lang['tickets_chart_weekly_opening_stats'] = 'Số liệu mỗi tuần';
$lang['related_knowledgebase_articles'] = 'Các bài viết liên quan';
$lang['detailed_overview'] = 'Tổng quan phân công';
$lang['tasks_total_checklists_finished'] = 'Tổng số mục được đánh dấu hoàn thành';
$lang['tasks_total_added_attachments'] = 'Tổng số tập tin đính kèm đã thêm';
$lang['tasks_total_comments'] = 'Tổng số bình luận';
$lang['task_finished_on_time'] = 'Đã hoàn thành trước hẹn?';
$lang['task_finished_on_time_indicator'] = 'Có';
$lang['task_not_finished_on_time_indicator'] = 'Không';
$lang['task_filter_fetch_month_by'] = 'Lấy dữ liệu tháng từ';
$lang['filter'] = 'Lọc';
$lang['task_filter_detailed_all_months'] = 'Tất cả các tháng';
$lang['kb_article_slug'] = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'Nếu yêu cầu được nhập vào cùng email liên kết và liên hệ không tồn tại trong CRM thì các mục sẽ không bị thay thế.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Dừng tất cả những mục tính thời gian đang chạy khi bắt đầu mục tính thời gian mới';
$lang['notification_when_customer_pay_invoice'] = 'Nhận thông báo khi khách hàng thanh toán hóa đơn (cài đặt sẵn)';
$lang['not_invoice_payment_recorded'] = 'Thanh toán hóa đơn mới - %s';
$lang['email_template_contact_warning'] = 'Nếu liên hệ không đăng nhập khi thực hiện tác vụ, các mục được gộp của liên hệ sẽ không bị thay thế.';
$lang['theme_style'] = 'Kiểu giao diện';
$lang['change_role_permission_warning'] = 'Thay đổi quyền hạn vị trí không ảnh hưởng đến quyền hạn thành viên hiện tại của vị trí này.';
$lang['task_copied_successfully'] = 'Sao chép phân công thành công';
$lang['failed_to_copy_task'] = 'Sao chép phân công không thành công';
$lang['not_project_file_uploaded'] = 'Đã thêm tập tin dự án mới';
$lang['settings_calendar_color'] = 'Màu %s';
$lang['settings_calendar_colors_heading'] = 'Trang trí';
$lang['reminder'] = 'Nhắc nhở';
$lang['back_to_tasks_list'] = 'Quay lại danh sách phân công';
$lang['copy_task_confirm'] = 'Xác nhận';
$lang['changing_items_affect_warning'] = 'Chỉnh sửa thông tin sản phẩm không ảnh hưởng đến hóa đơn/báo giá/đề xuất đã tạo.';
$lang['tax_is_used_in_expenses_warning'] = 'Bạn không thể cập nhật thuế này vì có khoản thu chi đang sử dụng nó.';
$lang['note'] = 'Ghi chú';
$lang['leads_staff_report_converted'] = 'Tổng số mục tiêu đã chuyển đổi';
$lang['leads_staff_report_created'] = 'Tổng số mục tiêu đã tạo';
$lang['leads_staff_report_lost'] = 'Tổng số mục tiêu đã mất liên lạc';
$lang['client_go_to_dashboard'] = 'Trở về trang đầu';
$lang['show_estimate_reminders_on_calendar'] = 'Nhắc nhở báo giá';
$lang['show_invoice_reminders_on_calendar'] = 'Nhắc nhở hóa đơn';
$lang['calendar_estimate_reminder'] = 'Nhắc nhở báo giá';
$lang['calendar_invoice_reminder'] = 'Nhắc nhở hóa đơn';
$lang['show_proposal_reminders_on_calendar'] = 'Nhắc nhở đề xuất';
$lang['calendar_proposal_reminder'] = 'Nhắc nhở đề xuất';
$lang['proposal_due_after']= 'Đề xuất kế hoạch chốt hẹn trong (ngày) nữa';
$lang['project_progress']= 'Tiến độ';
$lang['calculate_progress_through_tasks']= 'Tính toán tiến độ qua phân công';
$lang['allow_customer_to_change_ticket_status']= 'Cho phép khách hàng thay đổi trạng thái yêu cầu ở khi vực khách hàng';
$lang['switch_to_general_report']= 'Chuyển sang báo cáo nhân viên';
$lang['switch_to_staff_report']= 'Chuyển sang báo cáo chung';
$lang['generate']= 'Xuất ra';
$lang['from_date']= 'Từ ngày';
$lang['to_date']= 'Đến ngày';
$lang['not_results_found']= 'Không tìm thấy kết quả nào';
$lang['lead_lock_after_convert_to_customer']= 'Không cho phép sửa mục tiêu khi đã chuyển đổi sang khách hàng (không áp dụng cho người quản lý)';
$lang['default_pipeline_sort'] = 'Sắp xếp cột mặc định';
$lang['not_goal_message_failed'] = 'Chúng ta đã không đạt được mục tiêu!<br /> Loại mục tiêu: %s
<br />Thành tựu: %s
<br />Tổng số thành tựu: %s
<br />Ngày bắt đầu: %s
<br />Ngày kết thúc: %s';
$lang['toggle_full_view'] = 'Bật xem đầy đủ';
$lang['not_estimate_invoice_deleted'] = 'đã xóa hóa đơn';
$lang['not_task_new_comment'] = 'đã bình luận trên phân công %s';

# Version 1.1.8
$lang['invoice_number_exists'] = 'Mã số hóa đơn này tồn tại trong suốt năm.';
$lang['estimate_number_exists'] = 'Mã số báo giá này tồn tại trong suốt năm.';
$lang['email_exists'] = 'Email đã tồn tại';
$lang['not_uploaded_project_file'] = 'Đã tải lên tập tin mới';
$lang['not_created_new_project_discussion'] = 'Đã tạo cuộc trao đổi dự án mới';
$lang['not_commented_on_project_discussion'] = 'Bình luận mới trong trao đổi dự án';
$lang['all_staff_members'] = 'Tất cả nhân viên';
$lang['help_project_permissions'] = 'Chức năng XEM cho phép nhân viên xem TẤT CẢ dự án. Nếu bạn chỉ muốn họ xem dự án do họ đảm nhiệm (với tư cách thành viên) thì không nên cấp quyền này.';
$lang['help_tasks_permissions'] = 'Chức năng XEM cho phép nhân viên xem tất cả phân công. Nếu bạn chỉ muốn cho họ xem phân công mà họ được chỉ định hoặc đang theo dõi thì không nên cấp quyền này.';
$lang['expense_recurring_days'] = 'Ngày';
$lang['expense_recurring_weeks'] = 'Tuần';
$lang['expense_recurring_months'] = 'Tháng';
$lang['expense_recurring_years'] = 'Năm';
$lang['reset_to_default_color'] = 'Sửa lại thành màu mặc định';
$lang['pdf_logo_width'] = 'Chiều ngang logo (PX)';
$lang['drop_files_here_to_upload'] = 'Thả tập tin vào đây để tải lên';
$lang['browser_not_support_drag_and_drop'] = 'Trình duyệt của bạn không hỗ trợ thao tác kéo thả để tải tập tin';
$lang['remove_file'] = 'Gỡ bỏ tập tin';
$lang['you_can_not_upload_any_more_files'] = 'Bạn không thể tải lên thêm tập tin nào nữa';
$lang['custom_field_only_admin'] = 'Giới hạn hiển thị cho duy nhất người quản trị';
$lang['leads_default_source'] = 'Nguồn mặc định';
$lang['clear_activity_log'] = 'Xóa lịch sử';
$lang['default_contact_permissions'] = 'Quyền hạn liên hệ mặc định';
$lang['invoice_activity_marked_as_cancelled'] = 'đánh dấu hủy cho hóa đơn';
$lang['invoice_activity_unmarked_as_cancelled'] = 'bỏ đánh dấu hủy cho hóa đơn';
$lang['wait_text'] = 'Xin vui lòng đợi...';
$lang['projects_summary'] = 'Tóm lược dự án';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Mã hóa';
$lang['dept_email_password'] = 'Mật khẩu';
$lang['dept_email_no_encryption'] = 'Không có mã hóa';
$lang['failed_to_decrypt_password'] = 'Giải mã mật khẩu không thành công';
$lang['delete_mail_after_import'] = 'Xóa thư sau khi nhập vào?';
$lang['expiry_reminder_enabled'] = 'Gửi nhắc nhở hết hạn';
$lang['send_expiry_reminder_before'] = 'Gửi nhắc nhở hết hạn trước (ngày)';
$lang['not_expiry_reminder_sent'] = 'Đã gửi nhắc nhở hết hạn';
$lang['send_expiry_reminder'] = 'Nhắc nhở hết hạn đã gửi';
$lang['sent_expiry_reminder_success'] = 'Đã gửi nhắc nhở hết hạn thành công';
$lang['sent_expiry_reminder_fail'] = 'Gửi nhắc nhở hết hạn không thành công';
$lang['leads_default_status'] = 'Trạng thái mặc định';
$lang['item_description_placeholder'] = 'Mô tả';
$lang['item_long_description_placeholder'] = 'Mô tả dài';
$lang['item_quantity_placeholder'] = 'Số lượng';
$lang['item_rate_placeholder'] = 'Giá';
$lang['tickets_summary'] = 'Tóm lược yêu cầu hỗ trợ';
$lang['tasks_list_priority'] = 'Mức độ ưu tiên';
$lang['ticket_status_db_2'] = 'Đang thực hiện';
$lang['ticket_status_db_1'] = 'Mở';
$lang['ticket_status_db_3'] = 'Đã trả lời';
$lang['ticket_status_db_4'] = 'Tạm ngưng';
$lang['ticket_status_db_5'] = 'Đóng';
$lang['ticket_priority_db_1'] = 'Thấp';
$lang['ticket_priority_db_2'] = 'Bình thường';
$lang['ticket_priority_db_3'] = 'Cao';
$lang['customer_have_projects_by'] = 'Chứa các dự án theo trạng thái %s';
$lang['customer_have_proposals_by'] = 'Chứa các đề xuất theo trạng thái %s';
$lang['do_not_redirect_payment'] = 'Không dẫn tôi đến khâu xử lý thanh toán';
$lang['project_tickets'] = 'Yêu cầu';
$lang['invoice_report'] = 'Báo cáo hóa đơn';
$lang['payment_modes_report'] = 'Phương thức thanh toán (giao dịch)';
$lang['customer_admins'] = 'Quản trị khách hàng';
$lang['assign_admin'] = 'Chỉ định admin';
$lang['customer_admin_date_assigned'] = 'Ngày chỉ định';
$lang['customer_admin_login_as_client_message'] = 'Xin chào %s. Bạn đã được cấp quyền quản trị cho khách hàng này.';
$lang['ticket_form_validation_file_size'] = 'Dung lượng tập tin phải nhỏ hơn %s';
$lang['has_transactions_currency_base_change'] = 'Chỉ có thể thực hiện thay đổi đơn vị tiền nếu không có giao dịch nào sử dụng đơn vị đó. Xóa tất cả những giao dịch liên quan để thực hiện thay đổi';
$lang['customers_sort_all'] = 'Tất cả';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Cho phép reCAPTCHA ở khu vực khách hàng (Đăng nhập/đăng ký)';
$lang['project_marked_as_finished'] = 'Đã hoàn thành dự án';
$lang['project_status_updated'] = 'Đã cập nhật trạng thái dự án';
$lang['remove_decimals_on_zero'] = 'Loại bỏ phần thập phân nếu số/giá tiền là số nguyên (2.00 thành 2 nhưng 2.25 vẫn là 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Loại bỏ tên thuế trong các dòng danh sách sản phẩm';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Các khoản thu chi không xuất biên nhận được theo phân loại';
$lang['billable_expenses_by_categories'] = 'Các khoản thu chi xuất biên nhận được theo phân loại';
$lang['format_letter_size'] = 'A4 ngang';
$lang['pdf_formats'] = 'Định dạng văn bản';
$lang['swap_pdf_info'] = 'Tráo vị trí thông tin công ty/khách hàng (thông tin công ty nằm bên phải, thông tin khách hàng nằm bên trái)';
$lang['invoice_estimate_pdf_text_color'] = 'Màu chữ hóa đơn/báo giá';
$lang['expenses_filter_by_categories'] = 'Theo phân loại';
$lang['task_copy'] = 'Sao chép';
$lang['estimate_status'] = 'Trạng thái';
$lang['expenses_report_exclude_billable'] = 'Loại trừ các khoản thu chi có thể xuất biên nhận';
$lang['expenses_total'] = 'Tổng cộng';
$lang['estimate_activity_added_attachment'] = 'Đã đính kèm tập tin';
$lang['show_to_customer'] = 'Hiển thị với khách hàng';
$lang['hide_from_customer'] = 'Ẩn với khách hàng';
$lang['expenses_report_total'] = 'Tổng cộng';
$lang['expenses_report'] = 'Báo cáo thu chi';
$lang['expenses_report_tax'] = 'Thuế';
$lang['expenses_report_total_tax'] = 'Tổng thuế';
$lang['expenses_detailed_report'] = 'Báo cáo chi tiết';
$lang['expense_not_billable'] = 'Không thể xuất biên nhận';
$lang['notification_settings'] = 'Thiết lập thông báo';
$lang['staff_with_roles'] = 'Nhân viên nắm vai trò';
$lang['specific_staff_members'] = 'Thành viên cụ thể';
$lang['proposal_mark_as'] = 'Đánh dấu là %s';
$lang['kb_report_total_answers'] = 'Tổng cộng';
$lang['ticket_message_edit'] = 'Sửa';
$lang['invoice_files'] = 'Các tập tin hóa đơn';
$lang['estimate_files'] = 'Các tập tin báo giá';
$lang['proposal_files'] = 'Các tập tin đề xuất kế hoạch';
$lang['invoices_awaiting_payment'] = 'Hóa đơn đang chờ thanh toán';
$lang['tasks_not_finished'] = 'Phân công chưa hoàn thành';
$lang['outstanding_invoices'] = 'Hóa đơn nổi bật';
$lang['past_due_invoices'] = 'Hóa đơn quá hạn';
$lang['paid_invoices'] = 'Hóa đơn đã thanh toán';
$lang['invoice_estimate_year'] = 'Năm';
$lang['no_results_text_search_dropdown'] = 'Không có kết quả tương ứng';
$lang['task_stats_logged_hours'] = 'Thời gian đăng nhập';
$lang['leads_converted_to_client'] = 'Mục tiêu đã chuyển đổi';
$lang['task_assigned_from'] = 'Phân công này được chỉ định cho bạn bởi %s';
$lang['auto_check_for_new_notifications'] = 'Tự động kiểm tra nếu có thông báo mới (Giây - đặt 0 để vô hiệu hóa)';
$lang['recurring_ends_on'] = 'Kết thúc vào (để trống nếu không kết thúc)';
$lang['new_note'] = 'Ghi chú mới';
$lang['my_tickets_assigned'] = 'Yêu cầu được chỉ định cho tôi';
$lang['filter_by_assigned'] = 'Bởi thành viên được chỉ định';
$lang['staff_stats_total_logged_time'] = 'Tổng thời gian đăng nhập';
$lang['staff_stats_last_month_total_logged_time'] = 'Thời gian đăng nhập tháng trước';
$lang['staff_stats_this_month_total_logged_time'] = 'Thời gian đăng nhập tháng này';
$lang['staff_stats_last_week_total_logged_time'] = 'Thời gian đăng nhập tuần trước';
$lang['staff_stats_this_week_total_logged_time'] = 'Thời gian đăng nhập tuần này';
// Dont change this because are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description'] = 'Mô tả';
$lang['description_visible_to_customer'] = 'Hiển thị mô tả đối với khách hàng';
$lang['upcoming_tasks'] = 'Phân công sắp tới';
$lang['paymentmethod_two_checkout_account_number'] = 'Số tài khoản (ID người bán)';
$lang['paymentmethod_two_checkout_private_key'] = 'Mã riêng tư';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Mã công khai';
$lang['payment_credit_card_number'] = 'Số thẻ';
$lang['payment_credit_card_expiration_date'] = 'Ngày hết hạn';
$lang['payment_billing_email'] = 'Email';
$lang['payment_billing_name'] = 'Tên người biên nhận';
$lang['submit_payment'] = 'Gửi thanh toán';
$lang['2checkout_notice_payment'] = 'Thông tin thẻ tín dụng được xử lý thông qua token an ninh của 2Checkout';
$lang['2checkout_usage_notice'] = 'Yêu cầu SSL nếu bạn đang sử dụng thanh toán API của 2Checkout. Khuyến khích thực hiện cuộc gọi an toàn cho bên cấp quyền và token. Hệ thống vẫn sẽ hoạt động nếu không có SSL, tuy nhiên, điều này sẽ đi ngược lại mong muốn của bạn, làm tổn hại đến quyền hạn vô hiệu hóa API của bạn.';
$lang['custom_field_disallow_customer_to_edit'] = 'Bỏ cho phép khách hàng sửa mục này';
$lang['project_due_notice'] = 'Dự án này đã quá hạn %s ngày';
$lang['not_lead_added_attachment'] = 'đã thêm đính kèm cho mục tiêu %s';
$lang['lead_note_date_added'] = 'Đã thêm ghi chú %s';
$lang['recurring_custom'] = 'Tùy chỉnh';
// don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years'] = $lang['expense_recurring_years'];
$lang['invoice_recurring_days'] = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks'] = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Định hướng';
$lang['notify_project_members_status_change'] = 'Thông báo thay đổi trạng thái đến các thành viên dự án';
$lang['not_project_status_updated'] = 'Đã cập nhật trạng thái dự án từ %s sang %s';
$lang['ticket_not_found'] = 'Không tìm thấy yêu cầu';
$lang['project_not_found'] = 'Không tìm thấy dự án';
$lang['export_project_data'] = 'Xuất dữ liệu dự án';
$lang['total_project_members'] = 'Tổng số thành viên dự án';
$lang['total_project_files'] = 'Đã đính kèm các tập tin';
$lang['total_project_discussions_created'] = 'Đã tạo cuộc trao đổi';
$lang['project_member'] = 'Thành viên';
$lang['total_project_discussions_comments'] = 'Tổng số bình luận trao đổi';
$lang['staff_total_task_assigned'] = 'Tổng số phân công đã chỉ định';
$lang['staff_total_comments_on_tasks'] = 'Bình luận trên phân công';
$lang['project_members_overview'] = 'Tổng quan thành viên dự án';
$lang['project_milestones_overview'] = 'Tổng quan các cột mốc';
$lang['total_tasks_in_milestones'] = 'Tổng số phân công đã chỉ định';
$lang['total_task_members_assigned'] = 'Tổng số thành viên được chỉ định';
$lang['total_task_members_followers'] = 'Tổng số người theo dõi';
$lang['total_milestones'] = 'Tổng số cột mốc';
$lang['total_project_worked_days'] = 'Tổng số ngày làm việc';
$lang['finance_overview'] = 'Tổng quan ngân sách';
$lang['project_custom_fields'] = 'Các mục tùy chỉnh';
$lang['total_tickets_related_to_project'] = 'Tổng số yêu cầu được liên kết tới dự án';
$lang['projects_total_invoices_created'] = 'Tổng số hóa đơn đã tạo';
$lang['total_invoiced_amount'] = 'Tổng số hóa đơn đã tạo';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Không gửi thư ghi lại thanh toán hóa đơn cho các liên hệ khách hàng';
$lang['no_preview_available_for_file'] = 'Không có xem trước nào cho tập tin này.';
$lang['project_activity_deleted_file_discussion_comment'] = 'Đã xóa bình luận trao đổi tập tin';
$lang['file_not_found'] = 'Không tìm thấy tập tin';
$lang['email_template_discussion_info'] = 'Mẫu này được dùng cho cả hai email bình luận trao đổi dự án (trao đổi trình bày và trao đổi thông thường)';
$lang['format_a4_portrait_size'] = 'Khổ dọc';
$lang['only_show_contact_tickets'] = 'Trong khu vực khách hàng chỉ hiển thị yêu cầu liên quan đến liên hệ đã đăng nhập (không áp dụng cho liên hệ cơ bản)';
$lang['cancel_overdue_reminders_invoice'] = 'Ngăn chặn gửi nhắc nhở hết hạn cho hóa đơn này';
$lang['customer_shipping_address_notice'] = 'Không điền mục địa chỉ nhận hàng nếu bạn không dùng địa chỉ nhận hàng trên hóa đơn cho khách hàng';
$lang['timesheets_overview'] = 'Tổng quan biểu đồ thời gian';
$lang['invoice_status_draft'] = 'Nháp';
$lang['save_as_draft'] = 'Lưu thành nháp';
$lang['convert_and_save_as_draft'] = 'Chuyển đổi và lưu thành nháp';
$lang['convert'] = 'Chuyển đổi';
$lang['exclude_invoices_draft_from_client_area'] = 'Loại trừ hóa đơn mang trạng thái nháp khỏi khu vực khách hàng';
$lang['invoice_draft_status_info'] = 'Hóa đơn đang mang trạng thái Nháp, trạng thái sẽ tự động thay đổi khi bạn gửi hóa đơn cho khách hàng hoặc đánh dấu là đã gửi.';
$lang['task_info'] = 'Thông tin phân công';
$lang['recurring_tasks'] = 'Định kỳ';
// don't translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recurring_months'] = $lang['expense_recurring_months'];
$lang['task_recurring_years'] = $lang['expense_recurring_years'];
$lang['task_recurring_days'] = $lang['expense_recurring_days'];
$lang['task_recurring_weeks'] = $lang['expense_recurring_weeks'];
$lang['todays_tasks'] = 'Today\'s tasks';
$lang['payment_mode_invoices_only'] = 'Invoices Only';
$lang['payment_mode_expenses_only'] = 'Expenses Only';
$lang['task_no_checklist_items_found'] = 'Checklist items not found for this task';
$lang['task_no_description'] = 'No description for this task';
$lang['expenses_reminders'] = 'Reminders';
$lang['expense_set_reminder_title'] = 'Set expense reminder';
$lang['calendar_expense_reminder'] = 'Expense Reminders';
$lang['recurring_task'] = 'Recurring Task';
$lang['disable_email_from_being_sent'] = 'Disable this email from being sent';
$lang['not_sent_indicator'] =  'Not Sent';
$lang['proposal_status_revised'] =  'Revised';
$lang['customer_currency_change_notice'] =  'If the customer use other currency then the base currency make sure you select the appropriate currency for this customer. Changing the currency is not possible after transactions are recorded.';
$lang['click_to_add_content'] =  'Click here to add content';
$lang['related_to_project'] =  'This %s is related to %s: %s';
$lang['back_to_lead'] =  'Back to lead';
$lang['add_task_timer_started_warning'] =  'Stop current started timer for this task to be able to add new timer manually.';
$lang['sending_email_contact_permissions_warning'] =  'Failed to auto select customer contacts. Please make sure that the customer have associated contacts with permission %s';

# Version 1.2.6
$lang['currently_supported_currencies'] = 'Các đơn vị tiền đang được hỗ trợ';
$lang['authorize_notice'] = 'Yêu cầu SSL nếu bạn đang sử dụng thanh toán API của Authorize.net; Authorize.net chỉ hỗ trợ 1 đơn vị tiền cho mỗi tài khoản. Hãy chắc chắn bạn chỉ thêm đúng 1 đơn vị tương ứng với tài khoản Authorize của bạn trong mục này.';
$lang['settings_paymentmethod_developer_mode'] = 'Chế độ phát triển';
$lang['payment_cardholder_name'] = 'Tên chủ thẻ';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'ID đăng nhập API';
$lang['settings_paymentmethod_mollie_api_key'] =  'Mã API';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'ID giao dịch API';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Mã bí mật';
$lang['leads_report_converted_notice'] =  'Chỉ những đối tượng thuộc khách hàng mặc định mới được tính là đối tượng đã chuyển đổi, nếu đối tượng thuộc khách hàng mặc định và chưa được chuyển sang khách hàng thì vẫn sẽ tính là đối tượng đã chuyển đổi';
$lang['payment_method'] = 'Phương thức thanh toán';
$lang['payment_method_info'] = 'Một vài cổng thanh toán hỗ trợ các phương thức thanh toán khác nhau như Thẻ tín dụng, PayPal, ngân hàng.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses'] = 'Chọn tất cả thu chi';
$lang['role_update_staff_permissions'] = 'Cập nhật tất cả quyền hạn của nhân viên đang sử dụng vị trí này';
$lang['customer_active'] = 'Kích hoạt';
$lang['note_updated_successfully'] = 'Đã cập nhật ghi chú thành công';
$lang['update_note'] = 'Cập nhật ghi chú';
$lang['update_comment'] = 'Cập nhật bình luận';
$lang['comment_updated_successfully'] = 'Đã cập nhật bình luận thành công';
$lang['staff_send_welcome_email'] = 'Gửi thư chào mừng';
$lang['proposal_warning_email_change'] = 'Đã thay đổi email cho %s. %s này được liên kết đến đề xuất kế hoạch. Bạn có muốn cập nhật tất cả email đề xuất kế hoạch được liên kết đến %s không?';
$lang['update_proposal_email_yes'] = 'Vâng, tôi muốn cập nhật tất cả email liên kết.';
$lang['update_proposal_email_no'] = 'Không, tôi có thể tự cập nhật thủ công.';
$lang['proposals_emails_updated'] = 'Tất cả email đề xuất có liên kết đến %s này đã được cập nhật sang %s';
$lang['custom_field_company'] = 'Công ty';
$lang['actions'] = 'Hành động';
$lang['project_mark_as'] = 'Đánh dấu là %s';
$lang['todo_edit_title'] = 'Sửa nhắc nhở công việc';
$lang['additional_action_required'] = 'Yêu cầu hành động phụ!';
$lang['project_mark_tasks_finished_confirm'] = 'Xác nhận';
$lang['project_marked_as_success'] = 'Đánh dấu dự án %s thành công';
$lang['project_marked_as_failed'] = 'Đánh dấu dự án %s không thành công';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Tự động chỉ định khách hàng làm quản trị sau khi chuyển đổi';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Nếu bạn chọn CÓ cho mục này thì nhân viên đã chuyển mục tiêu sang khách hàng sẽ được chỉ định làm quản trị khách hàng. LƯU Ý: chức năng này chỉ áp dụng cho nhân viên không có thẩm quyền theo dõi khách hàng';
$lang['auto_close_tickets_disable'] = 'Đặt 0 để vô hiệu hóa';
$lang['task_checklist_item_completed_by'] = 'Đã hoàn thành bởi %s';
$lang['staff_email_signature_help'] = 'Nếu để trống thì sẽ sử dụng chữ ký email mặc định trong tùy chỉnh';
$lang['customer_sales'] = 'Doanh thu';
$lang['default_task_priority'] = 'Mức độ ưu tiên mặc định';
$lang['project_send_created_email'] = 'Gửi email dự án đã thực hiện';
$lang['survey_send_to_lists'] = 'Danh sách gửi thăm dò';
$lang['survey_send_notice'] = 'Email sẽ được gửi theo giờ thông qua CRON JOB.';
$lang['view_permission_auto_checked'] = 'Cho phép XEM tự động bật. Bạn phải chọn quyền XEM nếu muốn sử dụng chức năng SỬA, TẠO và XÓA hợp lý. Ba chức năng đó không thể sử dụng nếu không có quyền XEM vì XEM là quyền hạn chung và người dùng không thể mở dữ liệu cũng như thực hiện những thao tác trên nếu không có nó.';
$lang['custom_field_company_info'] = 'Sửa các mục tạo riêng cho công ty trong Thiết lập -> Tùy chỉnh -> Công ty';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'Hiển thị thanh toán (giao dịch) của hóa đơn trên PDF';
$lang['bulk_actions'] = 'Bulk Actions';
$lang['additional_filters'] = 'Chức năng lọc phụ';
$lang['expenses_available_to_bill'] = 'Các khoản thu chi hiện diện có thể xuất biên nhận';
$lang['bulk_action_customers_groups_warning'] = 'Nếu bạn không chọn nhóm nào thì tất cả các nhóm được chỉ định cho khách hàng đang được chọn sẽ bị gỡ bỏ.';
$lang['customer_attachments_show_in_customers_area'] = 'Hiển thị với khu vực khách hàng';
$lang['customer_attachments_show_notice'] = 'Chỉ những tập tin được tải lên từ tiểu sử khách hàng mới có khả năng hiện/ẩn trong khu vực khách hàng.';
$lang['customer_profile_files'] = 'Các tập tin';
$lang['no_files_found'] = 'Không tìm thấy tập tin nào';
$lang['survey_customers_all'] = 'Tất cả khách hàng';
$lang['custom_field_column'] = 'Grid (ví dụ Bootstrap Column là 12) - Tối đa là 12';
$lang['task_status'] = 'Trạng thái';
$lang['task_status_1'] = 'Chưa bắt đầu';
$lang['task_status_2'] = 'Đang chờ phản hồi';
$lang['task_status_3'] = 'Đang kiểm tra';
$lang['task_status_4'] = 'Đang tiến hành';
$lang['task_status_5'] = 'Đã hoàn thành';
$lang['task_mark_as'] = 'Đánh dấu là %s';
$lang['task_marked_as_success'] = 'Đánh dấu phân công %s thành công';
$lang['task_drag_drop_notice'] = 'Thao tác kéo thả chỉ để giúp dễ dàng thay đổi %s. Thứ tự sắp xếp không áp dụng cho khu vực này.';
$lang['search_tasks'] = 'Tìm phân công';
$lang['tasks_kanban_limit'] = 'Giới hạn cột phân công Kan Ban cho mỗi trạng thái';
$lang['show_on_invoice_on_pdf'] = 'Hiển thị %s trên bản PDF của hóa đơn';
$lang['show_pay_link_to_invoice_pdf'] = 'Hiển thị liên kết thanh toán hóa đơn trên bản PDF (không áp dụng nếu hóa đơn mang trạng thái Hủy)';
$lang['no_leads_found'] = 'Không tìm thấy mục tiêu nào';
$lang['created_today'] = 'Đã tạo hôm nay';
$lang['total_tasks_deleted'] = 'Tổng số phân công đã xóa: %s';
$lang['total_tickets_delete'] = 'Tổng số yêu cầu hỗ trợ đã xóa: %s';
$lang['total_tickets_delete'] = 'Tổng số yêu cầu hỗ trợ đã xóa: %s';
$lang['format_letter_portrait'] = 'Thư khổ dọc';
$lang['format_letter_landscape'] = 'Thư khổ ngang';
$lang['period_datepicker'] = 'Giai đoạn';
$lang['total_by_hourly_rate'] = 'Tổng số theo giờ chấm công';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'Ví dụ: mục THUẾ 15&#37; sẽ được hiển thị là 15&#37; không kèm theo tên thuế (không áp dụng nếu nhiều loại thuế mang trùng tên và trong mục có chứa phần trăm thuế)';
$lang['back_to_project'] = 'Quay trở lại dự án';
$lang['view_kanban'] = 'Xem Kan Ban';
$lang['invoice_is_overdue'] = 'Hóa đơn này đã quá hạn %s ngày';

# Version 1.2.9
$lang['time_decimal'] = 'Giờ (hiển thị thập phân)';
$lang['time_h'] = 'Giờ (tiếng)';
$lang['proposal_number_prefix'] = 'Số đánh dấu bản đề xuất';
$lang['settings_number_padding_prefix'] = 'Định dạng số kí tự hiển thị <br /> <small>Ví dụ: nếu giá trị mục này là 3 thì số đánh dấu sẽ được định dạng thành 005 hay 025</small>';
$lang['this_week_payments'] = 'Thanh toán tuần này';
$lang['last_week_payments'] = 'Thanh toán tuần trước';
$lang['not_published_new_post'] = 'Bài viết mới được đăng';
$lang['expense_name'] = 'Tên';
$lang['expense_name_help'] = 'Cho mục đích cá nhân';
$lang['adjustments'] = 'Hiệu chỉnh';
$lang['tax_breakdown'] = 'Phân tích thuế';
$lang['payments_received'] = 'Thanh toán đã nhận';
$lang['not_lead_activity_created_proposal'] = 'Tạo đề xuất kế hoạch mới - %s';
$lang['lead_title'] = 'Vị trí';
$lang['lead_address'] = 'Đại chỉ';
$lang['lead_city'] = 'Thành phố';
$lang['lead_state'] = 'Tiểu bang';
$lang['lead_country'] = 'Quốc gia';
$lang['lead_zip'] = 'Mã bưu chính';
$lang['lead_is_public_yes'] = 'Có';
$lang['lead_is_public_no'] = 'Không';
$lang['lead_info'] = 'Thông tin mục tiêu';
$lang['lead_general_info'] = 'Thông tin chung';
$lang['lead_latest_activity'] = 'Hoạt động cuối';
$lang['item_description_new_lines_notice'] = 'Mô tả sản phẩm không hỗ trợ chức năng thêm dòng. Thay vào đó hãy sử dụng mô tả dài.';
$lang['estimates_report'] = 'Báo cáo báo giá';
$lang['confirm'] = 'Xác nhận';
$lang['delete_staff'] = 'Xóa nhân viên';
$lang['delete_staff_info'] = 'Một vài dữ liệu của nhân viên này cần được chuyển sang cho người dùng khác. Xin hãy chọn người dùng bạn muốn chuyển.';
$lang['estimate_items'] = 'Các mục báo giá';
$lang['no_proposals_found'] = 'Không tìm thấy đề xuất nào';
$lang['no_estimates_found'] = 'Không tìm thấy báo giá nào';
$lang['pipeline_limit_status'] = 'Giới hạn cột mỗi trạng thái';
$lang['settings_update'] = 'Cập nhật hệ thống';
$lang['purchase_key'] = 'Mua key';
$lang['update_now'] = 'Cập nhật ngay bây giờ';
$lang['update_available'] = 'Có 1 bản cập nhật đang chờ';
$lang['latest_version'] = 'Phiên bản mới nhất';
$lang['your_version'] = 'Phiên bản của bạn';
$lang['using_latest_version'] = 'Bạn đang sử dụng phiên bản mới nhất';
$lang['mark_as_active'] = 'Đánh dấu là có hoạt động';
$lang['customer_inactive_message'] = 'Tiểu sử khách hàng không hoạt động, một vài chức năng có thể bị khóa';
$lang['active_customers'] = 'Khách hàng đang hoạt động';
$lang['inactive_active_customers'] = 'Khách hàng không hoạt động';
$lang['include_proposal_items_merge_field_help'] = 'Kèm theo các mục cũng như các trường được gộp trong nội dung đề xuất như là %s';
$lang['all_data_synced_successfully'] = 'Đồng bộ hóa dữ liệu thành công';
$lang['sync_now'] = 'Đồng bộ ngay';
$lang['sync_data'] = 'Đồng bộ dữ liệu';
$lang['sync_proposals_up_to_date'] = 'Các bản đề xuất đều đã cập nhật, không còn gì để đồng bộ hóa';
$lang['proposal_sync_1_info'] = 'Tất cả dữ liệu đề xuất đều được lưu trữ riêng biệt sau khi tạo. Cập nhật thông tin %s không ảnh hưởng đến những đề xuất đã tạo cho %s này.';
$lang['proposal_sync_2_info'] = 'Nếu bạn vừa cập nhật thông tin %s bạn có thể đồng bộ hóa toàn bộ dữ liệu mới thành các bản đề xuất liên giao. Đây là danh sách các mục bạn có thể đồng bộ hóa.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Gắn kèm thông tin phụ vào mô tả dài của vật phẩm lấy từ khoản thu chi này.';

# Version 1.4.0
$lang['calendar_events_limit'] = 'Giới hạn sự kiện của lịch (Chế độ xem tháng và tuần)';
$lang['show_page_number_on_pdf'] = 'Hiển th5i số trang trên PDF';
$lang['customer_active_inactive_help'] = 'Sẽ không hiển thị trong danh sách sổ xuống khi tạo báo cáo mới';
$lang['item_groups'] = 'Nhóm';
$lang['item_group'] = 'Nhóm sản phẩm';
$lang['item_group_name'] = 'Tên nhóm';
$lang['new_item_group'] = 'Nhóm mới';
$lang['show_setup_menu_item_only_on_hover'] = 'Chỉ hiển thị các mục menu thiết lập khi rê chuột lên khu vực thanh bên';
$lang['internal_article'] = 'Bài viết nội bộ';
$lang['expenses_created_from_this_recurring_expense'] = 'Tạo thu chi từ khoản thu chi định kỳ này';
$lang['convert_to_task'] = 'Chuyển đổi thành phân công';
$lang['next_invoice_date'] = 'Ngày gửi hóa đơn tiếp theo: %s';
$lang['next_expense_date'] = 'Ngày gửi báo giá tiếp theo: %s';
$lang['invoice_recurring_from'] = 'Hóa đơn này được tạo từ hóa đơn định kỳ với số: %s';
$lang['expense_recurring_from'] = 'Khoản này được tạo từ khoản thu chi định kỳ: %s';
$lang['child_invoices'] = 'Hóa đơn con';
$lang['child_expenses'] = 'Chi phí con';
$lang['no_announcements'] = 'Không có thông báo';
$lang['unit'] = 'Đơn vị';
$lang['permission_view_own'] = 'Xem (riêng)';
$lang['permission_global'] = 'Chung';
$lang['permission_customers_based_on_admins'] = 'Dựa trên quản trị khách hàng';
$lang['permission_payments_based_on_invoices'] = 'Dựa trên quyền hạn XEM (riêng) của hóa đơn';
$lang['permission_projects_based_on_assignee'] = 'Nếu nhân viên không có thẩm quyền, chức năng XEM (chung) sẽ chỉ hiển thị những dự án mà nhân viên đó được chỉ định làm thành viên.';
$lang['permission_tasks_based_on_assignee'] = 'Nếu nhân viên không có thẩm quyền, chức năng XEM (chung) sẽ chỉ hiển thị những phân công mà nhân viên đó được chỉ định làm người theo dõi hoặc đảm nhiệm. Phân công được hiển thị công khai hoặc vào Thiết lập -> Tùy chỉnh -> Phân công -> Chọn CÓ ở mục Cho phép tất cả nhân viên nhìn thấy phân công liên quan đến dự án khi phân công được dẫn liên kết đến dự án.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Được chọn mặc định trên hóa đơn';
$lang['paymentmethod_braintree_merchant_id'] = 'ID doanh nghiệp';
$lang['paymentmethod_braintree_private_key'] = 'Mã bí mật';
$lang['paymentmethod_braintree_public_key'] = 'Mã công khai';
$lang['company_requires_vat_number_field'] = 'Công ty yêu cầu sử dụng mục Mã số thuế';
$lang['no_company_view_profile'] = 'Cá nhân - Xem tiểu sử';
$lang['company_is_required'] = 'Yêu cầu mục công ty?';
$lang['estimate_invoiced'] = 'Đã xuất hóa đơn';
$lang['file_date_uploaded'] = 'Ngày đăng';
$lang['allow_contact_to_delete_files'] = 'Cho phép liên hệ xóa các tập tin họ đã tải lên trong khu vực khách hàng';
$lang['file'] = 'File';
$lang['customer_contact_person_only_one_allowed'] = 'Chỉ cho phép 1 liên hệ nếu để trống mục công ty. Hệ thống sẽ tự động xét liên hệ này là cá nhân độc lập';
$lang['web_to_lead'] = 'Đối tượng từ web';
$lang['web_to_lead_form'] = 'Mẫu đơn đối tượng từ web';
$lang['new_form'] = 'Mẫu đơn mới';
$lang['form_name'] = 'Tên mẫu đơn';
$lang['cf_option_in_use'] = 'Chức năng hiện đang được sử dụng và không thể gỡ bỏ. Chức năng được nối kèm tự động với các chức năng hiện có.';
$lang['form_builder'] = 'Mục xây dựng mẫu đơn';
$lang['form_information'] = 'Thông tin và thiết lập mẫu đơn';
$lang['form_builder_create_form_first'] = 'Tạo mẫu đơn trước tiên để có thể sử dụng mục xây dựng.';
$lang['notify_assigned_user'] = 'Người chịu trách nhiệm';
$lang['form_recaptcha'] = 'Sử dụng Google ReCAPTCHA';
$lang['form_lang_validation'] = 'Ngôn ngữ';
$lang['form_lang_validation_help'] = 'Sử dụng cho tin nhắn xác nhận';
$lang['form_btn_submit_text'] = 'Nội dung chữ trên nút gửi đi';
$lang['form_success_submit_msg'] = 'Tin nhắn hiển thị sau khi gửi mẫu đi thành công';
$lang['total_submissions'] = 'Tổng số lần gửi đi';
$lang['form_integration_code'] = 'Mã tích hợp';
$lang['not_lead_imported_from_form'] = 'Đối tượng từ web được nhập vào thông qua đơn - %s';
$lang['not_lead_activity_log_attachment'] = 'Đính kèm được nhập vào thông qua đơn - %s';
$lang['form_integration_code_help'] = 'Sao chép và dán đoạn mã vào bất kì nơi nào trên trang của bạn để chèn mẫu đơn, ngoài ra bạn có thể tùy chỉnh ngang dọc theo đơn vị px để vừa với trang.';
$lang['invoice_not_found'] = 'Không tìm thấy hóa đơn';
$lang['estimate_not_found'] = 'Không tìm thấy báo giá';
$lang['expense_not_found'] = 'Không tìm thấy thu chi';
$lang['proposal_not_found'] = 'Không tim thấy đề xuất kế hoạch';
$lang['new_task_assigned_non_user'] = 'Phân công mới được chỉ định cho bạn - %s';
$lang['no_child_found'] = 'Không tìm thấy %s con nào';
$lang['company_vat_number'] = 'Mã số thuế';
$lang['not_lead_assigned_from_form'] = 'Đối tượng mới được chỉ định cho bạn';
$lang['not_lead_activity_assigned_from_form'] = 'Đối tượng đã được chỉ định cho %s';
$lang['form_allow_duplicate'] = 'Cho phép sao đôi %s được chèn vào cơ sở dữ liệu?';
$lang['track_duplicate_by_field'] = 'Tránh việc sao chép các mục';
$lang['and_track_duplicate_by_field'] = '+ mục (để trống nếu muốn theo dõi các bản sao thông qua duy nhất 1 mục)';
$lang['create_the_duplicate_form_data_as_task'] = 'Tạo bản sao dữ liệu %s thành phân công và chỉ định cho nhân viên đảm nhiệm';
$lang['create_the_duplicate_form_data_as_task_help'] = 'Dùng cho những lần xem lại sau này và thực hiện hành động cần thiết';
$lang['currently_selected'] = 'Đang chọn';
$lang['search_ajax_empty'] = 'Chọn và bắt đầu gõ';
$lang['search_ajax_placeholder'] = 'Gõ để tìm kiếm...';
$lang['search_ajax_searching'] = 'Đang tìm...';
$lang['search_ajax_initialized'] = 'Bắt đầu gõ để tìm kiếm';
$lang['lead_description'] = 'Mô tả';
$lang['lead_website'] = 'Website';
$lang['invoice_activity_auto_converted_from_estimate'] = 'Hóa đơn được tạo tự động từ bản báo giá mang số %s';
$lang['hour_of_day_perform_auto_operations'] = 'Số giờ thực hiện thao tác tự động mỗi ngày';
$lang['hour_of_day_perform_auto_operations_format'] = 'Định dạng thời gian 24 tiếng, ví dụ: 9 cho 9 giờ sáng và 15 cho 3 giờ chiều.';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Được dùng cho hóa đơn định kỳ, thông báo quá hạn v.v...';
$lang['use_minified_files'] = 'Dùng phiên bản thu nhỏ tập tin cho css và js (chỉ áp dụng cho tập tin hệ thống)';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'Phát hiện thay đổi logo hoặc Favicon. Nếu bạn vẫn nhìn thấy logo CRM gốc hãy thử xóa cache của trình duyện đang dùng';
$lang['kb_search_articles'] = 'Tìm kiếm bài viết KTCM';
$lang['kb_search'] = 'Tìm';
$lang['have_a_question'] = 'Có thắc mắc?';
$lang['card_expiration_year'] = 'Năm hết hạn';
$lang['card_expiration_month'] = 'Tháng hết hạn';
$lang['client_website'] = 'Website';
$lang['search_project_members'] = 'Tìm thành viên dự án...';
$lang['cf_translate_input_link_title'] = 'Tựa';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'Ấn vào đây để thêm liên kết';
$lang['task_edit_delete_timesheet_notice'] = 'Các phân công trong biểu đồ thời gian đang %s, bạn không thể %s biểu đồ.';
$lang['department_username'] = 'Tên người dùng IMAP';
$lang['department_username_help'] = 'Chỉ điền vào mục này nếu hệ thống IMAP của bạn sử dụng tên người dùng thay vì địa chỉ email. Lưu ý là bạn vẫn cần phải thêm địa chỉ email sau.';
$lang['total_tickets_deleted'] = 'Tổng số yêu cầu đã xóa: %s';

# Version 1.5.1
$lang['ticket_linked_to_project'] = 'Yêu cầu này được dẫn liên kết đến dự án: %s';
$lang['only_own_files_contacts'] = 'Các liên hệ chỉ thấy được các tập tin họ tự tải lên trong khu vực khách hàng (các tập tin được tải lên trong tiểu sử khách hàng)';
$lang['only_own_files_contacts_help'] = 'Nếu bạn chia sẻ theo phương thức thủ công từ tiểu sử khách hàng sang các liên hệ khác thì họ sẽ nhìn thấy tập tin.';
$lang['share_file_with'] = 'Chia sẻ tập tin này với';
$lang['file_share_visibility_notice'] = 'Tập tin này không được chia sẻ với các liên hệ, bật hiển thị lần nữa để tải lại';
$lang['share_file_with_show'] = 'Tập tin này được chia sẻ với: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Cho phép liên hệ cơ bản xem/sửa chi tiết thanh toán và giao hàng';
$lang['estimate_due_after'] = 'Chốt hạn báo giá sau (ngày)';

# Version 1.6.0
$lang['my_timesheets'] = 'Biểu đồ thời gian của tôi';
$lang['today'] = 'Hôm nay';
$lang['open_in_dropbox'] = 'Mở trong Dropbox';
$lang['show_primary_contact'] = 'Hiển thị đầy đủ tên liên hệ cơ bản trên %s';
$lang['view_members_timesheets'] = 'Xem tất cả biểu đồ thời gian';
$lang['priority'] = 'Mức độ ưu tiên';
$lang['fetch_from_google'] = 'Lấy từ Google';
$lang['customer_fetch_lat_lng_usage'] = 'Nhập địa chỉ, thành phố và quốc gia trước khi tiến hành để có kết quả tốt nhất.';
$lang['g_search_address_not_found'] = 'Không tìm thấy địa chỉ, xin hãy thử lại';
$lang['proposals_report'] = 'Báo cáo đề xuất kế hoạch';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Nếu nhân viên không có thẩm quyền theo dõi khách hàng thì họ chỉ có thể tạo yêu cầu từ khu vực quản trị đến các liên hệ khách hàng mà họ được chỉ định làm quản trị khách hàng.';
$lang['staff_members_open_tickets_to_all_contacts'] = 'Cho phép nhân viên mở yêu cầu đến tất cả liên hệ??';
$lang['charts_based_report'] = 'Báo cáo theo biểu đồ';
$lang['delete_backups_older_then'] = 'Tự động xóa dữ liệu dự phòng cũ hơn X ngày (đặt 0 để vô hiệu hóa)';
$lang['responsible_admin'] = 'Quản trị viên chịu trách nhiệm';
$lang['tags'] = 'Các thẻ';
$lang['tag'] = 'Thẻ';
$lang['customer_map_notice'] = 'Thêm kinh độ và vĩ độ vào tiểu sử khách hàng để hiện bản đồ ở đây';
$lang['default_view'] = 'Chế độ xem mặc định';
$lang['day'] = 'Ngày';
$lang['agenda'] = 'Nhật ký công tác';
$lang['timesheet_tags'] = 'Thẻ biểu đồ thời gian';
$lang['show_more'] = 'Hiển thị thêm';
$lang['show_less'] = 'Hiển thị bớt';
$lang['project_completed_date'] = 'Ngày hoàn thành';
$lang['language'] = 'Ngôn ngữ';
$lang['this_week'] = 'Tuần này';
$lang['last_week'] = 'Tuần trước';
$lang['this_month'] = 'Tháng này';
$lang['last_month'] = 'Tháng trước';
$lang['no_description_project'] = 'Không có mô tả nào cho dự án này';
$lang['sales_string'] = 'Doanh số';
$lang['no_project_members'] = 'Không có thành viên nào cho dự án này';
$lang['search_by_tags'] = 'Sử dụng # + tên thẻ để tìm theo thẻ';
$lang['project_status_5'] = 'Đã hủy';

# Version 1.7.0
$lang['not_activity_new_reminder_created'] = 'đặt nhắc nhở mới cho %s với ngày %s';
$lang['not_activity_new_task_created'] = 'Đã tạo phân công mới - %s';
$lang['recurring_invoice_draft_notice'] = 'Hóa đơn này mang trạng thái nháp, bạn phải đánh dấu là đã gửi. Các hóa đơn định kỳ mang trạng thái nháp sẽ không được gửi tiếp bởi CRON JOB.';
$lang['recurring_recreate_hour_notice'] = '%s sẽ được gửi lại vào thời gian nhất định, với ngày gửi căn cứ theo lựa chọn trong Thiết lập -> Tùy chỉnh -> Tùy chỉnh CRON JOB';
$lang['invoice_project_include_timesheets_notes'] = 'Đính kèm ghi chú biểu đồ thời gian trong mô tả mỗi mục';
$lang['events'] = 'Sự kiện';
$lang['clear'] = 'Xóa';
$lang['auto_mark_as_public'] = 'Tự động đánh dấu công khai';
$lang['time_format'] = 'Định dạng thời gian';
$lang['time_format_24'] = '24 tiếng';
$lang['time_format_12'] = '12 tiếng';
$lang['delete_activity_log_older_then'] = 'Xóa các ghi chép hoạt động của hệ thống cũ hơn X tháng';
$lang['mark_as_read'] = 'Đánh dấu là đã đọc';
$lang['mark_all_as_read'] = 'Đánh dấu tất cả là đã đọc';
$lang['tax_1'] = 'Thuế 1';
$lang['tax_2'] = 'Thuế 2';
$lang['total_with_tax'] = 'Tổng cộng thuế';
$lang['new_task_auto_assign_current_member'] = 'Tự động chỉ định người tạo phân công khi phân công được tạo';
$lang['new_task_auto_assign_current_member_help'] = 'Không áp dụng nếu phân công này được liên kết đến dự án mà người tạo không phải là thành viên';
$lang['copy_project_tasks_status'] = 'Trạng thái phân công';
$lang['tasks_summary'] = 'Tóm lược phân công';
$lang['show_gantt_by'] = 'Hiển thị biểu đồ Gantt theo';
$lang['vault'] = 'Vault';
$lang['new_vault_entry'] = 'Mục vault mới';
$lang['server_address'] = 'Địa chỉ máy chủ';
$lang['port'] = 'Cổng';
$lang['vault_username'] = 'Tên người dùng';
$lang['vault_password'] = 'Mật khẩu';
$lang['vault_description'] = 'Mô tả ngắn';
$lang['vault_entry'] = 'Mục vault';
$lang['no_port_provided'] = 'Chưa cung cấp';
$lang['view_password'] = 'Xem mật khẩu';
$lang['security_reasons_re_enter_password'] = 'Vì lý do an ninh xin hãy nhập mật khẩu của bạn trong mục sau';
$lang['password_change_fill_notice'] = 'Chỉ nhập vào mục mật khẩu nếu bạn muốn thay đổi mật khẩu';
$lang['vault_password_user_not_correct'] = 'Mật khẩu của bạn không chính xác, xin hãy thử lại';
$lang['no_vault_entries'] = 'Không tìm thấy các mục vault của khách hàng này.';
$lang['vault_entry_created_from'] = 'Mục vault này được tạo bởi %s';
$lang['vault_entry_last_update'] = 'Cập nhật lần cuối bởi %s';
$lang['vault_entry_visible_to_all'] = 'Hiển thị cho những nhân viên đã truy cập khách hàng này';
$lang['vault_entry_visible_creator'] = 'Chỉ hiển thị với tôi (và người quản trị)';
$lang['vault_entry_visible_administrators'] = 'Chỉ hiển thị với ban quản trị';
$lang['my_reminders'] = 'Nhắc nhở của tôi';
$lang['reminder_related'] = 'Liên quan đến';
$lang['event_notification'] = 'Thông báo';
$lang['days'] = 'Ngày';
$lang['reminder_notification_placeholder'] = 'Ví dụ: 30 phút trước';
$lang['event_color'] = 'Màu sự kiện';
$lang['group_by_task'] = 'Gộp nhóm theo phân công';
$lang['save'] = 'Lưu';
$lang['disable_languages'] = 'Vô hiệu hóa ngôn ngữ';

# Version 1.8.0
$lang['not_customer_viewed_invoice'] = 'An invoice with number %s has been viewed';
$lang['not_customer_viewed_estimate'] = 'An estimate with number %s has been viewed';
$lang['not_customer_viewed_proposal'] = 'An proposal with number %s has been viewed';
$lang['display_inline'] = 'Display Inline';
$lang['email_header'] = 'Predefined Header';
$lang['email_footer'] = 'Predefined Footer';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Exclude proposals with draft status from customers area';
$lang['pusher_app_key'] = 'APP Key';
$lang['pusher_app_secret'] = 'APP Secret';
$lang['pusher_app_id'] = 'APP ID';
$lang['pusher_cluster_notice'] = 'Leave blank to use default pusher cluster.';
$lang['pusher_enable_realtime_notifications'] = 'Enable Real Time Notifications';
$lang['task_is_overdue'] = 'This task is overdue';
$lang['this_year'] = 'This Year';
$lang['last_year'] = 'Last Year';
$lang['customer_statement'] = 'Statement';
$lang['customer_statement_for'] = 'Customer Statement For %s';
$lang['account_summary'] = 'Account Summary';
$lang['statement_beginning_balance'] = 'Beginning Balance';
$lang['invoiced_amount'] = 'Invoiced Amount';
$lang['amount_paid'] = 'Amount Paid';
$lang['statement_from_to'] = '%s To %s';
$lang['customer_statement_info'] = 'Showing all invoices and payments between %s and %s';
$lang['balance_due'] = 'Balance Due';
$lang['statement_heading_date'] = 'Date';
$lang['statement_heading_details'] = 'Details';
$lang['statement_heading_amount'] = 'Amount';
$lang['statement_heading_payments'] = 'Payments';
$lang['statement_heading_balance'] = 'Balance';
$lang['statement_invoice_details'] = 'Invoice %s - due on %s';
$lang['statement_payment_details'] = 'Payment (%s) to invoice %s';
$lang['statement_bill_to'] = 'To';
$lang['send_to_email']          = 'Send to Email';
$lang['statement_sent_to_client_success'] = 'The statement is sent successfully to the client';
$lang['statement_sent_to_client_fail']    = 'Problem while sending the statement';
$lang['view_account_statement']    = 'View Account Statement';
$lang['text_not_recommended_for_servers_limited_resources'] = 'Not recommended if the server have limited resources. Eq shared hosting';
$lang['tasks_bull_actions_assign_notice'] = 'If the task is linked to project and the staff member you are assigning the task to is not project member this staff will be auto added as member.';
$lang['company_information'] = 'Company Information';
$lang['ticket_form'] = 'Ticket Form';
$lang['ticket_form_subject'] = 'Subject';
$lang['ticket_form_name'] = 'Your name';
$lang['ticket_form_email'] = 'Email Address';
$lang['ticket_form_department'] = 'Department';
$lang['ticket_form_message'] = 'Message';
$lang['ticket_form_priority'] = 'Priority';
$lang['ticket_form_service'] = 'Service';
$lang['ticket_form_submit'] = 'Submit';
$lang['ticket_form_attachments'] = 'Attachments';

$lang['success_submit_msg'] = 'Thank you for contacting us. We will get back to you shortly.';
$lang['vault_entry_share_on_projects'] = 'Share this vault entry in projects with project members';
$lang['project_shared_vault_entry_login_details'] = 'View Customer Site Login Details';
$lang['iso_code'] = 'ISO Code';
$lang['estimates_not_invoiced'] = 'Not Invoiced';
$lang['show_on_ticket_form'] = 'Show on ticket form';
$lang['cancel_upload'] = 'Cancel Upload';
$lang['show_table_export_button'] = 'Show table export button';
$lang['show_table_export_all'] = 'To all staff members';
$lang['show_table_export_admins'] = 'Only to administrators';
$lang['show_table_export_hide'] = 'Hide export button for all staff members';
$lang['task_created_by'] = 'Created by %s';
$lang['validation_extension_not_allowed'] = 'File extension not allowed';
$lang['allow_staff_view_proposals_assigned'] = 'Allow staff members to view proposals where they are assigned to';
$lang['task_users_working_on_tasks_multiple'] = 'Currently %s are working on this task';
$lang['task_users_working_on_tasks_single'] = 'Currently %s is working on this task';
