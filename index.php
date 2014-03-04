<?php
$instance_id = file_get_contents("http://instance-data/latest/meta-data/instance-id");
$EC2_AVAIL_ZONE = file_get_contents("http://instance-data/latest/meta-data/placement/availability-zone/"); 
$EC2_REGION=`curl http://169.254.169.254/latest/dynamic/instance-identity/document|grep region|awk -F\" '{print $4}'`;
echo "My name is $instance_id running in this $EC2_AVAIL_ZONE AZ in $EC2_REGION region", "\n";
?>
