<?php

//�����̓���
//�ϐ�a�ɕW�����͂̒l�����
fscanf(STDIN,"%d",$a); //a = 1

//�X�y�[�X��؂�̐����̓���
//�X�y�[�X�ŋ�؂������ꂼ��̒l��ϐ�b�Ac�ɓ���
fscanf(STDIN,"%d %d",$b,$c); //b = 2
                             //c = 3

//������̓���
fscanf(STDIN,"%s",$s); //s = test

//�o��
//"\n"�ŉ��s���o��
echo($a+$b+$c). " ".$s."\n"; //6 test

?>