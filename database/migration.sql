alter table  `h_schedule_date` add column `remaining_time_in_minutes` varchar(20) DEFAULT '0' NULL after `close_time`;
alter table  `h_appointments` add column `service_id` int(10) DEFAULT '0' NULL after `appointments_time_end`;
