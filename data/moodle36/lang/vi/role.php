<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'role', language 'vi', branch 'MOODLE_36_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Đang thêm vai trò mới';
$string['addrole'] = 'Thêm vai trò mới';
$string['advancedoverride'] = 'Tiếm quyền vai trò nâng cao';
$string['allow'] = 'Cho phép';
$string['allowassign'] = 'Cho phép bổ nhiệm vai trò';
$string['allowed'] = 'Được cho phép';
$string['allowoverride'] = 'Cho phép tiếm quyền vai trò';
$string['allowroletoassign'] = 'Cho phép người dùng với vai trò {$a->fromrole} bổ nhiệm vai trò {$a->targetrole}';
$string['allowroletooverride'] = 'Cho phép người dùng với vai trò {$a->fromrole} tiếm quyền vai trò {$a->targetrole}';
$string['allowroletoswitch'] = 'Cho phép người dùng với vai trò {$a->fromrole} chuyển các vai trò thành {$a->targetrole}';
$string['allowswitch'] = 'Cho phép chuyển đổi vai trò';
$string['allsiteusers'] = 'Tất cả người dùng trang';
$string['archetype'] = 'Nguyên mẫu vai trò';
$string['archetypecoursecreator'] = 'NGUYÊN MẪU: Người tạo khóa học';
$string['archetypeeditingteacher'] = 'NGUYÊN MẪU: Giáo viên (đang sửa)';
$string['archetypefrontpage'] = 'NGUYÊN MẪU: Người dùng đã xác thực trên trang chủ';
$string['archetypeguest'] = 'NGUYÊN MẪU: Khách';
$string['archetype_help'] = 'Nguyên mẫu vai trò xác định các quyền khi vai trò được đặt lại mặc định. Nó cũng xác định bất kì quyền hạn mới nào cho vai trò khi trang được nâng cấp.';
$string['archetypemanager'] = 'NGUYÊN MẪU: Người quản lý';
$string['archetypestudent'] = 'NGUYÊN MẪU: Học viên';
$string['archetypeteacher'] = 'NGUYÊN MẪU: Giáo viên (không sửa)';
$string['archetypeuser'] = 'NGUYÊN MẪU: Người dùng đã xác thực';
$string['assignanotherrole'] = 'Bổ nhiệm vai trò khác';
$string['assignedroles'] = 'Các vai trò đã bổ nhiệm';
$string['assignglobalroles'] = 'Bổ nhiệm vai trò hệ thống';
$string['assignrole'] = 'Bổ nhiệm vai trò';
$string['assignrolenameincontext'] = 'Bổ nhiệm vai trò \'{$a->role}\' trong {$a->context}';
$string['assignroles'] = 'Bổ nhiệm vai trò';
$string['assignroles_help'] = 'Khi bổ nhiệm vai trò mới cho người dùng trong một bối cảnh, bạn giao các quyền nằm trong vai trò đó, cho bối cảnh hiện tại và các bối cảnh bên dưới. Ví dụ, nếu người dùng được bổ nhiệm vai trò học viên trong khóa học, họ cũng sẽ có vai trò học viên cho mọi hoạt động và các khối trong khóa học.';
$string['assignrolesin'] = 'Bổ nhiệm vai trò trong {$a}';
$string['assignrolesrelativetothisuser'] = 'Bổ nhiệm vai trò liên quan người dùng này';
$string['backtoallroles'] = 'Trở về danh sách tất cả vai trò';
$string['backup:anonymise'] = 'Ẩn dữ liệu người dùng khi sao lưu';
$string['backup:backupactivity'] = 'Sao lưu các hoạt động';
$string['backup:backupcourse'] = 'Sao lưu các khóa học';
$string['backup:backupsection'] = 'Sao lưu các phân mục';
$string['backup:backuptargethub'] = 'Sao lưu cho cổng trung tâm';
$string['backup:backuptargetimport'] = 'Sao lưu để nhập';
$string['backup:configure'] = 'Thiết lập lựa chọn sao lưu';
$string['backup:downloadfile'] = 'Tải tệp từ các khu vực sao lưu';
$string['backup:userinfo'] = 'Sao lưu dữ liệu người dùng';
$string['badges:awardbadge'] = 'Trao huy hiệu cho người dùng';
$string['badges:configurecriteria'] = 'Thiết lập/sửa tiêu chuẩn nhận huy hiệu';
$string['badges:configuredetails'] = 'Thiết lập/sửa chi tiết huy hiệu';
$string['badges:configuremessages'] = 'Thiết lập tin nhắn huy hiệu';
$string['badges:createbadge'] = 'Tạo/sao y huy hiệu';
$string['badges:deletebadge'] = 'Xóa huy hiệu';
$string['badges:earnbadge'] = 'Nhận huy hiệu';
$string['badges:manageglobalsettings'] = 'Quản lý thiết lập huy hiệu toàn cục';
$string['badges:manageownbadges'] = 'Xem và quản lý các huy hiệu đã đạt được';
$string['badges:viewawarded'] = 'Xem những người dùng đạt một huy hiệu nhất định mà không thể trao huy hiệu';
$string['badges:viewbadges'] = 'Xem các huy hiệu hiện hữu mà không phải nhận chúng';
$string['badges:viewotherbadges'] = 'Xem các huy hiệu công khai trong hồ sơ người dùng khác';
$string['block:edit'] = 'Sửa thiết lập khối';
$string['block:view'] = 'Xem khối';
$string['blog:create'] = 'Tạo mục blog mới';
$string['blog:manageentries'] = 'Sửa và quản lý mục';
$string['blog:manageexternal'] = 'Sửa và quản lý blog ngoài';
$string['blog:search'] = 'Tìm mục blog';
$string['blog:view'] = 'Xem mục blog';
$string['blog:viewdrafts'] = 'Xem mục nháp blog';
$string['calendar:manageentries'] = 'Quản lý tất cả các mục của lịch';
$string['calendar:managegroupentries'] = 'Quản lý tất cả các mục của lịch nhóm';
$string['calendar:manageownentries'] = 'Quản lý tất cả các mục của bản thân';
$string['capabilities'] = 'Quyền';
$string['capability'] = 'Quyền';
$string['category:manage'] = 'Quản lý các danh mục';
$string['category:update'] = 'Cập nhật các danh mục';
$string['category:viewhiddencategories'] = 'Xem các danh mục ẩn';
$string['category:visibility'] = 'Xem các danh mục ẩn';
$string['checkglobalpermissions'] = 'Kiểm tra quyền hệ thống';
$string['checkpermissions'] = 'Kiểm tra quyền';
$string['checkpermissionsin'] = 'Kiểm tra quyền trong {$a}';
$string['checksystempermissionsfor'] = 'Kiểm tra quyền hệ thống cho {$a->fullname}';
$string['checkuserspermissionshere'] = 'Kiểm trong quyền cho {$a->fullname} có trong {$a->contextlevel} này';
$string['chooseroletoassign'] = 'Hãy chọn vai trò để bổ nhiệm';
$string['cohort:assign'] = 'Thêm và xóa thành viên đoàn thể';
$string['cohort:manage'] = 'Tạo, xóa và chuyển đoàn thể';
$string['cohort:view'] = 'Xem các đoàn thể trên toàn trang';
$string['comment:delete'] = 'Xóa bình luận';
$string['comment:post'] = 'Gửi bình luận';
$string['comment:view'] = 'Đọc bình luận';
$string['community:add'] = 'Sử dụng khối cộng đồng này đẻ tìm các cổng trung tâm và khóa học';
$string['community:download'] = 'Tải khóa học từ khối cộng đồng';
$string['confirmaddadmin'] = 'Bạn thật sự muốn thêm người dùng <strong>{$a}</strong> làm quản trị trang mới?';
$string['confirmdeladmin'] = 'Bạn thật sự muốn xóa người dùng <strong>{$a}</strong> khỏi danh sách các quản trị trang?';
$string['confirmroleprevent'] = 'Bạn thật sự muốn xóa <strong>{$a->role}</strong> từ danh sách các vai trò cho phép quyền {$a->cap} trong bối cảnh {$a->context}?';
$string['confirmroleunprohibit'] = 'Bạn thật sự muốn xóa <strong>{$a->role}</strong> từ danh sách các vai trò cấm quyền {$a->cap} trong bối cảnh {$a->context}?';
$string['confirmunassign'] = 'Bạn có chắc muốn xóa vai trò này khỏi người dùng này?';
$string['confirmunassignno'] = 'Hủy';
$string['confirmunassigntitle'] = 'Xác nhận thay đổi vai trò';
$string['confirmunassignyes'] = 'Xóa';
$string['context'] = 'Bối cảnh';
$string['course:activityvisibility'] = 'Ẩn/hiện các hoạt động';
$string['course:bulkmessaging'] = 'Gửi tin nhắn đến nhiều người';
$string['course:changecategory'] = 'Đổi danh mục khóa học';
$string['course:changefullname'] = 'Đổi tên đầy đủ khóa học';
$string['course:changeidnumber'] = 'Đổi số ID khóa học';
$string['course:changeshortname'] = 'Đổi tên ngắn khóa học';
$string['course:changesummary'] = 'Đổi tóm tắt khóa học';
$string['course:create'] = 'Tạo khóa học';
$string['course:delete'] = 'Xóa khóa học';
$string['course:enrolconfig'] = 'Thiết lập thực thể ghi danh trong các khóa học';
$string['course:enrolreview'] = 'Kiểm duyệt các ghi danh khóa học';
$string['course:ignorefilesizelimits'] = 'Sử dụng các tệp lớn hơn bất kì giới hạn kích thước tệp nào';
$string['course:isincompletionreports'] = 'Được hiện trên các báo cáo hoàn thành';
$string['course:manageactivities'] = 'Quản lý hoạt động';
$string['course:managefiles'] = 'Quản lý tập tin';
$string['course:managegrades'] = 'Quản lý điểm';
$string['course:managegroups'] = 'Quản lý nhóm';
$string['course:managescales'] = 'Quản lý thang điểm';
$string['course:markcomplete'] = 'Đánh dấu người dùng hoàn thành trong bản hoàn thành khóa học';
$string['course:movesections'] = 'Chuyển các mục';
$string['course:publish'] = 'Đăng tải một khóa học vào cổng trung tâm';
$string['course:request'] = 'Yêu cầu các khóa học mới';
$string['course:reset'] = 'Đặt lại khóa học';
$string['course:reviewotherusers'] = 'Kiểm duyệt các người dùng khác';
$string['course:sectionvisibility'] = 'Kiểm soát hiển thị phân mục';
$string['course:setcurrentsection'] = 'Đặt phân mục hiện tại';
$string['course:update'] = 'Cập nhật thiết lập khóa học';
$string['course:useremail'] = 'Kích hoạt/vô hiệu hóa địa chỉ email';
$string['course:view'] = 'Xem khóa học mà không có thành phần tham gia';
$string['course:viewcoursegrades'] = 'Xem điểm khóa học';
$string['course:viewhiddenactivities'] = 'Xem các hoạt động ẩn';
$string['course:viewhiddencourses'] = 'Xem các khóa học ẩn';
$string['course:viewhiddensections'] = 'Xem các phân mục ẩn';
$string['course:viewhiddenuserfields'] = 'Xem các mục người dùng ẩn';
$string['course:viewparticipants'] = 'Xem thành phần tham gia';
$string['course:viewscales'] = 'Xem các thang điểm';
$string['course:viewsuspendedusers'] = 'Xem các người dùng bị đình chỉ';
$string['course:visibility'] = 'Ẩn/hiện các khóa học';
$string['createrolebycopying'] = 'Tạo vai trò mới bằng cách chép {$a}';
$string['createthisrole'] = 'Tạo vai trò này';
$string['currentcontext'] = 'Bối cảnh hiện tại';
$string['currentrole'] = 'Vai trò hiện tại';
$string['customroledescription'] = 'Mô tả tùy chỉnh';
$string['customroledescription_help'] = 'Mô tả các vai trò chuẩn được bản địa hóa tự động nếu mô tả tùy chỉnh bỏ trống.';
$string['customrolename'] = 'Tên đầy đủ tùy chỉnh';
$string['customrolename_help'] = 'Tên các vai trò chuẩn được bản địa hóa tự động nếu tên tùy chỉnh bỏ trống. Bạn phải cung cấp tên đầy đủ cho tất cả vai trò tùy chỉnh.';
$string['defaultrole'] = 'Vai trò mặc định';
$string['defaultx'] = 'Mặc định: {$a}';
$string['defineroles'] = 'Xác định các vai trò';
$string['deletecourseoverrides'] = 'Xóa tất cả vai trò trong khóa học';
$string['deletelocalroles'] = 'Xóa tất cả bổ nhiệm vai trò cục bộ';
$string['deleterolesure'] = 'Bạn có chắc muốn xóa vai trò "{$a->name} ({$a->shortname})"?</p><p>Hiện tại vai trò này được bổ nhiệm cho {$a->count} người dùng.';
$string['deletexrole'] = 'Xóa {$a} vai trò';
$string['duplicaterole'] = 'Sao y vai trò';
$string['editingrolex'] = 'Đang sửa vai trò \'{$a}\'';
$string['editxrole'] = 'Sửa {$a} vai trò';
$string['errorbadrolename'] = 'Tên vai trò không phù hợp';
$string['errorbadroleshortname'] = 'Tên ngắn vai trò không phù hợp';
$string['errorexistsrolename'] = 'Tên vai trò đã tồn tại';
$string['errorexistsroleshortname'] = 'Tên vai trò đã tồn tại';
$string['eventroleallowassignupdated'] = 'Cho phép bổ nhiệm vai trò';
$string['eventroleallowoverrideupdated'] = 'Cho phép tiếm quyền vai trò';
$string['eventroleallowswitchupdated'] = 'Cho phép chuyển đổi vai trò';
$string['eventroleassigned'] = 'Vai trò đã được bổ nhiệm';
$string['eventrolecapabilitiesupdated'] = 'Các quyền vai trò đã được cập nhật';
$string['eventroledeleted'] = 'Vai trò đã bị xóa';
$string['eventroleunassigned'] = 'Vai trò đã bị rút bổ nhiệm';
$string['existingadmins'] = 'Các quản trị trang hiện tại';
$string['existingusers'] = '{$a} người dùng tồn tại';
$string['explanation'] = 'Giải thích';
$string['export'] = 'Xuất';
$string['extusers'] = 'Các người dùng tồn tại';
$string['extusersmatching'] = 'Những người dùng tồn tại trùng khớp \'{$a}\'';
$string['filter:manage'] = 'Quản lý thiết lập bộ lọc cục bộ';
$string['frontpageuser'] = 'Người dùng đã xác thực trên trang chủ';
$string['frontpageuserdescription'] = 'Tất cả người dùng đã đăng nhập trong khóa học trên trang chủ';
$string['globalrole'] = 'Vai trò hệ thống';
$string['globalroleswarning'] = 'CẢNH BÁO! Bất kì vai trò nào mà bạn bổ nhiệm từ trang này sẽ áp dụng với những người dùng đã được bổ nhiệm trong suốt toàn hệ thống, bao gồm trang chủ và tất cả khóa học.';
$string['gotoassignroles'] = 'Đến Bổ nhiệm vai trò cho {$a->contextlevel} này';
$string['gotoassignsystemroles'] = 'Đến Bổ nhiệm vai trò hệ thống';
$string['grade:edit'] = 'Sửa điểm';
$string['grade:export'] = 'Xuất điểm';
$string['grade:hide'] = 'Ẩn/Hiện điểm hoặc mục';
$string['grade:import'] = 'Nhập điểm';
$string['grade:lock'] = 'Khóa điểm hoặc mục';
$string['grade:manage'] = 'Quản lý các mục điểm';
$string['grade:managegradingforms'] = 'Quản lý các phương thức chấm điểm nâng cao';
$string['grade:manageletters'] = 'Quản lý điểm bằng chữ';
$string['grade:manageoutcomes'] = 'Quản lý đầu ra điểm';
$string['grade:managesharedforms'] = 'Quản lý biểu mẫu chấm điểm nâng cao';
$string['grade:sharegradingforms'] = 'Chia sẻ mẫu đơn chấm điểm nâng cao làm mẫu';
$string['grade:unlock'] = 'Mở khóa điểm hoặc mục';
$string['grade:view'] = 'Xem điểm sở hữu';
$string['grade:viewall'] = 'Xem điểm của người dùng khác';
$string['grade:viewhidden'] = 'Xem điểm ẩn sở hữu';
$string['highlightedcellsshowdefault'] = 'Quyền được đánh dấu trong bảng bên dưới là mặc định cho nguyên mẫu vai trò hiện tại được chọn ở trên.';
$string['highlightedcellsshowinherit'] = 'Các ô đánh dấu trong bảng dưới cho xem quyền (nếu có) sẽ được thừa hưởng.';
$string['inactiveformorethan'] = 'không hoạt động trong hơn {$a->timeperiod}';
$string['ingroup'] = 'trong nhóm "{$a->group}"';
$string['inherit'] = 'Thừa hưởng';
$string['invalidpresetfile'] = 'Tệp định nghĩa vai trò không phù hợp';
$string['legacytype'] = 'Loại vai trò thừa hưởng';
$string['listallroles'] = 'Danh sách tất cả vai trò';
$string['localroles'] = 'Các vai trò được bổ nhiệm cục bộ';
$string['mainadmin'] = 'Quản trị viên chính';
$string['mainadminset'] = 'Đặt quản trị viên chính';
$string['manageadmins'] = 'Quản lý các quản trị trang';
$string['manager'] = 'Người quản lý';
$string['managerdescription'] = 'Các người quản lý có thể truy cập khóa học và sửa chúng, thường thì họ không tham gia các khóa học.';
$string['manageroles'] = 'Quản lý các vai trò';
$string['maybeassignedin'] = 'Các kiểu bối cảnh mà vai trò này có thể được bổ nhiệm';
$string['morethan'] = 'Nhiều hơn {$a}';
$string['multipleroles'] = 'Nhiều vai trò';
$string['my:configsyspages'] = 'Thiết lập mẫu hệ thống cho Trang nhà của tôi';
$string['my:manageblocks'] = 'Quản lý Khối trang nhà của tôi';
$string['neededroles'] = 'Vai trò và quyền';
$string['nocapabilitiesincontext'] = 'Không có quyền trong bối cảnh này';
$string['noneinthisx'] = 'Không có trong {$a} này';
$string['noneinthisxmatching'] = 'Không có người dùng trùng khớp \'{$a->search}\' trong {$a->contexttype} này';
$string['norole'] = 'Không có vai trò';
$string['noroleassignments'] = 'Người dùng này không có bất kì bổ nhiệm vai trò nào ở bất cứ đâu trong trang này.';
$string['noroles'] = 'Không có vai trò';
$string['notabletoassignroleshere'] = 'Bạn không thể bổ nhiệm bất kì vai trò nào ở đây';
$string['notes:manage'] = 'Quản lý ghi chú';
$string['notes:view'] = 'Xem ghi chú';
$string['notset'] = 'Không đặt';
$string['overrideanotherrole'] = 'Tiếm quyền vai trò khác';
$string['overridecontext'] = 'Tiếm quyền bối cảnh';
$string['overridepermissions'] = 'Tiếm quyền';
$string['overridepermissionsforrole'] = 'Thay thế quyền đối với vai trò \'{$a->role}\' trong {$a->context}';
$string['overridepermissions_help'] = 'Tiếm quyền cho phép các quyền được chọn sẽ được phép hoặc ngăn lại trong một bối cảnh cụ thể.';
$string['overrideroles'] = 'Tiếm quyền các vai trò';
$string['overrides'] = 'Tiếm quyền';
$string['permission'] = 'Quyền';
$string['permission_help'] = 'Quyền là các thiết lập quyền hạn. Có 4 lựa chọn:

* Không đặt
* Cho phép - Quyền được cấp quyền hạn
* Ngăn chặn - Quyền bị xóa khỏi quyền hạn, dầu được cho phép trong một bối cảnh cao hơn
* Cấm - Quyền bị từ chối hoàn toán và không thể tiếm quyền ở bất kì bối cảnh thấp hơn (cụ thể hơn) nào';
$string['permissions'] = 'Các quyền';
$string['permissionsforuser'] = 'Các quyền cho người dùng {$a}';
$string['permissionsincontext'] = 'Các quyền trong {$a}';
$string['portfolio:export'] = 'Xuất vào hồ sơ học tập';
$string['potusers'] = 'Các người dùng tiềm năng';
$string['potusersmatching'] = 'Các người dùng tiềm năng trùng khớp \'{$a}\'';
$string['prevent'] = 'Ngăn chặn';
$string['prohibit'] = 'Cấm';
$string['prohibitedroles'] = 'Bị cấm';
$string['question:add'] = 'Thêm các câu hỏi mới';
$string['question:config'] = 'Thiết lập các loại câu hỏi';
$string['question:editall'] = 'Sửa tất cả câu hỏi';
$string['question:editmine'] = 'Sửa các câu hỏi của riêng bạn';
$string['question:flag'] = 'Các câu hỏi có cờ khi đang làm bài';
$string['question:managecategory'] = 'Sửa các danh mục câu hỏi';
$string['question:moveall'] = 'Chuyển tất cả câu hỏi';
$string['question:movemine'] = 'Chuyển các câu hỏi của riêng bạn';
$string['question:useall'] = 'Sử dụng tất cả câu hỏi';
$string['question:usemine'] = 'Sử dụng các câu hỏi của riêng bạn';
$string['question:viewall'] = 'Xem tất cả câu hỏi';
$string['question:viewmine'] = 'Xem các câu hỏi của riêng bạn';
$string['rating:rate'] = 'Thêm đánh giá vào các mục';
$string['rating:view'] = 'Xem tổng đánh giá bạn nhận được';
$string['rating:viewall'] = 'Xem tất cả đánh giá thô nhận được từ các cá nhân';
$string['rating:viewany'] = 'Xem tổng đánh giá bất kì ai nhận được';
$string['resetrole'] = 'Đặt lại';
$string['resettingrole'] = 'Đang đặt lại vai trò \'{$a}\'';
$string['restore:configure'] = 'Thiết lập lựa chọn phục hồi';
$string['restore:createuser'] = 'Tạo các người dùng khi phục hồi';
$string['restore:restoreactivity'] = 'Phục hồi các hoạt động';
$string['restore:restorecourse'] = 'Phục hồi các khóa học';
$string['restore:restoresection'] = 'Phục hồi các phân mục';
$string['restore:restoretargethub'] = 'Phục hồi từ các tệp được nhắm làm cổng trung tâm';
$string['restore:restoretargetimport'] = 'Phục hồi từ các tệp được nhắm làm bản nhập';
$string['restore:rolldates'] = 'Được phép cuốn các ngày giờ thiết lập hoạt động khi phục hồi';
$string['restore:uploadfile'] = 'Đăng tải tệp lên vùng sao lưu';
$string['restore:userinfo'] = 'Phục hồi dữ liệu người dùng';
$string['restore:viewautomatedfilearea'] = 'Phục hồi các khóa học từ các bản sao lưu tự động';
$string['risks'] = 'Các rủi ro';
$string['roleallowheader'] = 'Cho phép vai trò:';
$string['roleallowinfo'] = 'Chọn vai trò để thêm vào danh sách các vai trò được cho phép trong bối cảnh {$a->context}, quyền hạn {$a->cap}:';
$string['role:assign'] = 'Bổ nhiệm vai trò cho các người dùng';
$string['roleassignments'] = 'Các bổ nhiệm vai trò';
$string['roledefinitions'] = 'Định nghĩa các vai trò';
$string['rolefullname'] = 'Tên';
$string['roleincontext'] = '{$a->role} trong {$a->context}';
$string['role:manage'] = 'Tạo và quản lý vai trò';
$string['role:override'] = 'Tiếm quyền đối với những thứ khác';
$string['roleprohibitheader'] = 'Cấm vai trò';
$string['roleprohibitinfo'] = 'Chọn vai trò để thêm vào danh sách các vai trò bị cấm trong bối cảnh {$a->context}, quyền hạn {$a->cap}:';
$string['rolerepreset'] = 'Dùng thiết lập trước vai trò';
$string['roleresetdefaults'] = 'Mặc định';
$string['roleresetrole'] = 'Dùng vai trò hoặc nguyên mẫu';
$string['role:review'] = 'Kiểm duyệt quyền đối với những thứ khác';
$string['rolerisks'] = 'Các rủi ro vai trò';
$string['roles'] = 'Các vai trò';
$string['role:safeoverride'] = 'Tiếm quyền an toàn đối với những thứ khác';
$string['roleselect'] = 'Chọn vai trò';
$string['rolesforuser'] = 'Các vai trò đối với người dùng {$a}';
$string['roles_help'] = 'Vai trò là một tập hợp các quyền được định nghĩa cho toàn hệ thống mà bạn có thể phân bổ cho các người dùng cụ thể trong các bối cảnh cụ thể.';
$string['roleshortname'] = 'Tên tắt';
$string['roleshortname_help'] = 'Tên ngắn vai trò là định danh vai trò cấp thấp mà chỉ có các kí tự ASCII chữ hoặc số được cho phép. Không đổi tên ngắn của các vai trò chuẩn.';
$string['role:switchroles'] = 'Chuyển sang các vai trò khác';
$string['safeoverridenotice'] = 'Chú ý: Các quyền hạn với rủi ro cao bị khóa bởi chúng chỉ được phép thay thế các quyền hạn an toàn.';
$string['selectanotheruser'] = 'Chọn người dùng khác';
$string['selectauser'] = 'Chọn người dùng';
$string['showthisuserspermissions'] = 'Hiện quyền của người dùng này';
$string['site:accessallgroups'] = 'Truy cập tất cả các nhóm';
$string['siteadministrators'] = 'Quản trị trang';
$string['site:approvecourse'] = 'Chấp thuận tạo lập khóa học';
$string['site:backup'] = 'Sao lưu các khóa học';
$string['site:config'] = 'Đổi thiết lập trang';
$string['site:doanything'] = 'Được phép làm mọi thứ';
$string['site:doclinks'] = 'Hiện các liên kết đến tài liệu ngoài';
$string['site:forcelanguage'] = 'Thay thế ngôn ngữ khóa học';
$string['site:import'] = 'Nhập các khóa học khác vào một khóa học';
$string['site:manageblocks'] = 'Quản lý các khối trên một trang';
$string['site:mnetlogintoremote'] = 'Chuyển vùng sang ứng dụng từ xa thông qua MNet';
$string['site:readallmessages'] = 'Đọc tất cả tin nhắn trên trang';
$string['site:restore'] = 'Phục hồi các khóa học';
$string['site:sendmessage'] = 'Gửi tin nhắn đến bất kì người dùng nào';
$string['site:trustcontent'] = 'Tin tưởng nội dung được gửi';
$string['site:uploadusers'] = 'Đăng tải người dùng mới từ tệp';
$string['site:viewfullnames'] = 'Luôn thấy tên đầy đủ của người dùng';
$string['site:viewparticipants'] = 'Xem thành phần tham gia';
$string['site:viewreports'] = 'Xem báo cáo';
$string['site:viewuseridentity'] = 'Xem danh tính người dùng đầy đủ theo danh sách';
$string['tag:edit'] = 'Sửa các thẻ tồn tại';
$string['tag:editblocks'] = 'Sửa các khối trong các trang thẻ';
$string['tag:flag'] = 'Gắn cờ không phù hợp';
$string['tag:manage'] = 'Quản lý tất cả thẻ';
$string['thisnewrole'] = 'Vai trò mới này';
$string['thisusersroles'] = 'Các bổ nhiệm vai trò của người dùng này';
$string['unassignarole'] = 'Rút bổ nhiệm vai trò {$a}';
$string['unassignconfirm'] = 'Bạn thật sự muốn rút bổ nhiệm vai trò "{$a->role}" từ người dùng "{$a->user}"?';
$string['user:changeownpassword'] = 'Đổi mật khẩu riêng';
$string['user:create'] = 'Tạo người dùng';
$string['user:delete'] = 'Xóa người dùng';
$string['user:editmessageprofile'] = 'Sửa hồ sơ thông báo người dùng';
$string['user:editownmessageprofile'] = 'Sửa hồ sơ thông báo người dùng thuộc sở hữu';
$string['user:editownprofile'] = 'Sửa hồ sơ người dùng thuộc sở hữu';
$string['user:editprofile'] = 'Sửa hồ sơ người dùng';
$string['user:ignoreuserquota'] = 'Bỏ qua giới hạn chỉ tiêu người dùng';
$string['user:loginas'] = 'Đăng nhập làm người dùng khác';
$string['user:manageblocks'] = 'Quản lý các khối trên hồ sơ của các người dùng khác';
$string['user:manageownblocks'] = 'Quản lý các khối trên hồ sơ người công khai sở hữu';
$string['user:manageownfiles'] = 'Quản lý các tệp trên khu vực tệp riêng sở hữu';
$string['user:managesyspages'] = 'Thiết lập bố cục trang mặc định cho các hồ sơ người dùng công khai';
$string['user:readuserblogs'] = 'Xem tất cả blog người dùng';
$string['user:readuserposts'] = 'Xem tất cả bài viết diễn đàn của người dùng';
$string['usersfrom'] = 'Những người dùng từ {$a}';
$string['usersfrommatching'] = 'Những người dùng từ {$a->contextname} trùng khớp \'{$a->search}\'';
$string['usersinthisx'] = 'Những người dùng trong {$a} này';
$string['usersinthisxmatching'] = 'Những người dùng trong {$a->contexttype} này trùng khớp \'{$a->search}\'';
$string['userswiththisrole'] = 'Những người dùng với vai trò';
$string['user:update'] = 'Cập nhật hồ sơ người dùng';
$string['user:viewalldetails'] = 'Xem thông tin người dùng đầy đủ';
$string['user:viewdetails'] = 'Xem hồ sơ người dùng';
$string['user:viewhiddendetails'] = 'Xem chi tiết ẩn của người dùng';
$string['user:viewlastip'] = 'Xem địa chỉ ip người dùng lần cuối';
$string['user:viewuseractivitiesreport'] = 'Xem báo cáo hoạt động người dùng';
$string['useshowadvancedtochange'] = 'Sử dụng \'Hiện nâng cao\' để thay đổi';
$string['viewingdefinitionofrolex'] = 'Đang xem định nghĩa vai trò \'{$a}\'';
$string['webservice:createmobiletoken'] = 'Tạo token dịch vụ web cho truy cập di động';
$string['webservice:createtoken'] = 'Tạo token dịch vụ web';
$string['xroleassignments'] = 'Các bổ nhiệm vai trò của {$a}';
$string['xuserswiththerole'] = 'Người dùng với vai trò "{$a->role}"';
