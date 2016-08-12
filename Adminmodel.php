<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Adminmodel extends CI_model

  {
   public function check_logina ($id1,$id2,$id3)

    {
  $this->db->from('itsadmin');
   $this->db->where('email',$id1);
  $this->db->where('password',$id2);
  $this->db->where('admin',$id3);
  
   $query = $this->db->get();
 if($query->num_rows() == 1)
    {
 return $query->row();
 } 
else
{ 
return false;
}
}

 public function check_email($email)
 {
 $this->db->from('itsadmin');
   $this->db->where('email',$email);
   $query = $this->db->get();
 if($query->num_rows()==1)
	{
			return  $query->row();

	}
    else {

    	 return false;
    }
}

public function check_admin($str,$email,$password)
{
  //echo $str.$email.$password;
  $this->db->from('itsadmin');
   $this->db->where('password',$password);
   $this->db->where('admin',$str);
   $this->db->where('email',$email);
   $query = $this->db->get();
 if($query->num_rows()==1)
	{
return  $query->row();
	}
    else {

    	 return false;
    }	
	
	
	
	
}



public function numberquestion()
{
	
$this->db->from('exam_biology');
$biology = $this->db->count_all_results();
$this->db->from('exam_chemistry');
$chemstry = $this->db->count_all_results();
$this->db->from('exam_maths');
$maths =$this->db->count_all_results();
$this->db->from('exam_physics');
$physics= $this->db->count_all_results();
return ($biology+$chemstry+$maths+$physics);
	
}
public function numberstudents()
{
	
$this->db->from('registration');
$registrations = $this->db->count_all_results();
return ($registrations);
}
public function numberphy()
{
	
$this->db->from('chapter_physics');
$phy = $this->db->count_all_results();
return ($phy);
}

public function numberbio()
{
	
$this->db->from('chapter_biology');
$bio = $this->db->count_all_results();
return ($bio);
}
public function numbermaths()
{
	
$this->db->from('chapter_maths');
$maths = $this->db->count_all_results();
return ($maths);
}
public function numberchem()
{
	
$this->db->from('chapter_chemistry');
$chem = $this->db->count_all_results();
return ($chem);
}

public function bioexam()
{
$this->db->from('stu_subject_test');
$this->db ->where('stu_subject_name','biology');
$bioexam = $this->db->count_all_results();
return ($bioexam);
}
 public function bioqu()
 {
$this->db->from('exam_biology');
$bioque = $this->db->count_all_results();
return($bioque);
 }
public function phyexam()
{
$this->db->from('stu_subject_test');
$this->db ->where('stu_subject_name','physics');
$phy = $this->db->count_all_results();
return($phy);
}
public function phychexam()
{
$this->db->from('stu_chapter_test');
$this->db ->where('stu_subject_name','physics');
$phych = $this->db->count_all_results();
return($phych);
}

public function mathchexam()
{
$this->db->from('stu_chapter_test');
$this->db ->where('stu_subject_name','maths');
$mathch = $this->db->count_all_results();
return($mathch);
}
public function biocheexam()
{
$this->db->from('stu_chapter_test');
$this->db ->where('stu_subject_name','biology');
$bioch = $this->db->count_all_results();
return($bioch);
}
public function chemcheexam()
{
$this->db->from('stu_chapter_test');
$this->db ->where('stu_subject_name','chemistry');
$chemich = $this->db->count_all_results();
return($chemich);
}
public function mathsexam()
{
$this->db->from('stu_subject_test');
$this->db ->where('stu_subject_name','maths');
$maths = $this->db->count_all_results();
return($maths);
}
public function chemqu()
{

$this->db->from('exam_chemistry');
$cheque = $this->db->count_all_results();
return($cheque);

}
public function chemiexam()
{
$this->db->from('stu_subject_test');
$this->db ->where('stu_subject_name','chemistry');
$che = $this->db->count_all_results();
return($che);
}
public function phyname()
{
$this->db->select('*');	
$this->db->from('chapter_physics');
$phyname = $this->db->get();
return $phyname->result();
}

public function bname()
{
$this->db->select('*');	
$this->db->from('chapter_biology');
$phyname = $this->db->get();
return $phyname->result();
}
public function chname()
{
$this->db->select('*');	
$this->db->from('chapter_chemistry');
$phyname = $this->db->get();
return $phyname->result();
}

public function mthname()
{
$this->db->select('*');	
$this->db->from('chapter_maths');
$phyname = $this->db->get();
return $phyname->result();
}

 public function phyqu()
 {

	$this->db->from('exam_physics');
	$phyque = $this->db->count_all_results();
	 return($phyque);
 
 }
 
 public function phychap($id1)
 {
  
  $this->db->select('question,ans1,ans2,ans3,ans4,correct_ans');
  $this->db->from('exam_physics');
  $this->db->where('chapter_id',$id1); 	 
  $query = $this->db->get();
  return $query;	 
 }
public function phychap2($limit,$id,$id2)                                    
 {
  
  $this->db->select('question,ans1,ans2,ans3,ans4,correct_ans');
  $this->db->from('exam_physics');
  $this->db->limit($limit,$id);
   $this->db->where('chapter_id',$id2);
  $query = $this->db->get();
  return $query;	 
 }
public function countphychap($id)
 {
  
  $this->db->from('exam_physics');	 
  $this->db->where('chapter_id',$id);
  	$query = $this->db->count_all_results();
	 return $query;	 
 }
 public function countbiochap($id)
 {
  
  $this->db->from('exam_biology');	 
  $this->db->where('chapter_id',$id);
  	$query = $this->db->count_all_results();
	 return $query;	 
 }
  public function biochap($id1)
 {
  
  $this->db->select('question,ans1,ans2,ans3,ans4,correct_ans');
  $this->db->from('exam_biology');
  $this->db->where('chapter_id',$id1); 	 
  $query = $this->db->get();
  return $query;	 
 }
 public function biochap2($limit,$id,$id2)                                    
 {
  
  $this->db->select('question,ans1,ans2,ans3,ans4,correct_ans');
  $this->db->from('exam_biology');
  $this->db->limit($limit,$id);
   $this->db->where('chapter_id',$id2);
  $query = $this->db->get();
  return $query;	 
 }
 
  public function chemchap($id1)
 {
  
  $this->db->select('question,ans1,ans2,ans3,ans4,correct_ans');
  $this->db->from('exam_chemistry');
  $this->db->where('chapter_id',$id1); 	 
  $query = $this->db->get();
  return $query;	 
 }
public function  chemchap2($limit,$id,$id2)                                    
 {
  
  $this->db->select('question,ans1,ans2,ans3,ans4,correct_ans');
  $this->db->from('exam_chemistry');
  $this->db->limit($limit,$id);
   $this->db->where('chapter_id',$id2);
  $query = $this->db->get();
  return $query;	 
 }
public function countchemchap($id)
 {
  
  $this->db->from('exam_chemistry');	 
  $this->db->where('chapter_id',$id);
  	$query = $this->db->count_all_results();
	 return $query;	 
 }
   public function mathschap($id1)
 {
  
  $this->db->select('question,ans1,ans2,ans3,ans4,correct_ans');
  $this->db->from('exam_maths');
  $this->db->where('chapter_id',$id1); 	 
  $query = $this->db->get();
  return $query;	 
 }
public function  mathschap2($limit,$id,$id2)                                    
 {
  
  $this->db->select('question,ans1,ans2,ans3,ans4,correct_ans');
  $this->db->from('exam_maths');
  $this->db->limit($limit,$id);
   $this->db->where('chapter_id',$id2);
  $query = $this->db->get();
  return $query;	 
 }
public function countmathschap($id)
 {
  
  $this->db->from('exam_maths');	 
  $this->db->where('chapter_id',$id);
  	$query = $this->db->count_all_results();
	 return $query;	 
 }
 
 public function phychapid()
 {
	$this->db->select('id');	
	$this->db->from('chapter_physics');
	$query = $this->db->get();
	return $query->result();
 
 }
 
     public function phychap1id($id)
	 {
		 $allval;
		foreach($id as $phyid)
		{
		$this->db->select('question');
	  $this->db->where('chapter_id',$phyid->id);
	$this->db->from('exam_physics');
   $phyque = $this->db->count_all_results();
	//echo ($phyque);
		
				}

	}

/* maths */




 public function mathsqu()
 {
   $this->db->from('exam_maths');
	$mathsque = $this->db->count_all_results();
	 return($mathsque);
 
 }
 
 public function paimpt()
 {
 $query= $this->db->query("SELECT * FROM stu_subject_test where stu_subject_name ='physics'  AND stu_exam_syllabus ='wet_aipmt' ORDER BY id DESC LIMIT 2");
   return ($query);
	 
 }
 public function pjeemain()
 {
 $query= $this->db->query("SELECT * FROM stu_subject_test where stu_subject_name ='physics'  AND stu_exam_syllabus ='wet_jeemain' ORDER BY id DESC LIMIT 2");
  return ($query);
	 
 }
 /*public function ch_aimptp()
 
 {
 $this->db->select('stu_chapter_name');
 $this->db->where('stu_subject_name','physics');
$this->db->where('stu_exam_syllabus','wet_aipmt');
 $this->db->group_by('stu_chapter_name'); 
$query =  $this->db->get('stu_chapter_test');
//return ($query);	 
}*/
 
 /* aimpt */ 

 public function stuaimpt()
 {
$this->db->distinct();
$this->db->from('stu_subject_test');
$this->db->where('stu_subject_name','physics');
$this->db->where('stu_exam_syllabus','wet_aipmt');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countaimptp()
 
 {
    $this->db->from('stu_subject_test');
	$this->db->where('stu_subject_name','physics');
	$this->db->where('stu_exam_syllabus','wet_aipmt');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
 public function stuchaimpt()
 {
$this->db->distinct();
$this->db->from('stu_chapter_test');
$this->db->where('stu_subject_name','physics');
$this->db->where('stu_exam_syllabus','wet_aipmt');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countchaimptp()
 
 {
    $this->db->from('stu_chapter_test');
	$this->db->where('stu_subject_name','physics');
	$this->db->where('stu_exam_syllabus','wet_aipmt');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
// jeemain
 public function stujeemain()
 {
$this->db->distinct();
$this->db->from('stu_subject_test');
$this->db->where('stu_subject_name','physics');
$this->db->where('stu_exam_syllabus','wet_jeemain');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
 public function countjeemain()
 
 {
    $this->db->from('stu_subject_test');
	$this->db->where('stu_subject_name','physics');
	$this->db->where('stu_exam_syllabus','wet_jeemain');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
 public function stuchjeemain()
 {
$this->db->distinct();
$this->db->from('stu_chapter_test');
$this->db->where('stu_subject_name','physics');
$this->db->where('stu_exam_syllabus','wet_jeemain');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countchjeemain()
 
 {
    $this->db->from('stu_chapter_test');
	$this->db->where('stu_subject_name','physics');
	$this->db->where('stu_exam_syllabus','wet_jeemain');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
  

 // top scoreer in aimpt //
 
 public function topscaimpt()
 {
  $this->db->select('*');
  $this->db->from('stu_subject_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','physics');
  $this->db->where('stu_exam_syllabus','wet_aipmt');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
 // top scorer in  jeemain
 public function topscjeemain()
 {
  $this->db->select('*');
  $this->db->from('stu_subject_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','physics');
  $this->db->where('stu_exam_syllabus','wet_jeemain');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
// top scorro chapter wise in aipmt
 public function topscchaimpt()
 {
  $this->db->select('*');
  $this->db->from('stu_chapter_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','physics');
  $this->db->where('stu_exam_syllabus','wet_aipmt');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}

// top scorro chapter wise in jeemain
 public function topscchjeemain()
 {
  $this->db->select('*');
  $this->db->from('stu_chapter_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','physics');
  $this->db->where('stu_exam_syllabus','wet_jeemain');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
// insert questions 
public function insertphyquestions($data){
$query =  $this->db->insert('exam_physics',$data);
return $query;
}

function selectnewphyq()
{
$this->db->select('exam_physics.question');
$this->db->from('exam_physics');
$this->db->join('chapter_physics','chapter_physics.id = exam_physics.chapter_id');
$this->db->where('exam_physics.new_que','newquestion');
$this->db->select('chapter_physics.chapter_name');
	$query = $this->db->get();
	return $query;
}

/* chemitsry */
public function stucheaimpt()
 {
$this->db->distinct();
$this->db->from('stu_subject_test');
$this->db->where('stu_subject_name','chemistry');
$this->db->where('stu_exam_syllabus','wet_aipmt');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countcheaimptp()
 
 {
    $this->db->from('stu_subject_test');
	$this->db->where('stu_subject_name','chemistry');
	$this->db->where('stu_exam_syllabus','wet_aipmt');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
 public function stuchcheaimpt()
 {
$this->db->distinct();
$this->db->from('stu_chapter_test');
$this->db->where('stu_subject_name','chemistry');
$this->db->where('stu_exam_syllabus','wet_aipmt');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countchcheaimptp()
 
 {
    $this->db->from('stu_chapter_test');
	$this->db->where('stu_subject_name','chemistry');
	$this->db->where('stu_exam_syllabus','wet_aipmt');
	$phyque = $this->db->count_all_results();
	
	 return($phyque);	 
}
// jeemain
 public function stuchejeemain()
 {
$this->db->distinct();
$this->db->from('stu_subject_test');
$this->db->where('stu_subject_name','chemistry');
$this->db->where('stu_exam_syllabus','wet_jeemain');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();

  return ($query);
}
 public function countchejeemain()
 
 {
    $this->db->from('stu_subject_test');
	$this->db->where('stu_subject_name','chemistry');
	$this->db->where('stu_exam_syllabus','wet_jeemain');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
 public function stuchchejeemain()
 {
$this->db->distinct();
$this->db->from('stu_chapter_test');
$this->db->where('stu_subject_name','chemistry');
$this->db->where('stu_exam_syllabus','wet_jeemain');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countchchejeemain()
 
 {
    $this->db->from('stu_chapter_test');
	$this->db->where('stu_subject_name','chemistry');
	$this->db->where('stu_exam_syllabus','wet_jeemain');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
  

 // top scoreer in aimpt //
 
 public function topsccheaimpt()
 {
  $this->db->select('*');
  $this->db->from('stu_subject_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','chemistry');
  $this->db->where('stu_exam_syllabus','wet_aipmt');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
 // top scorer in  jeemain
 public function topscchejeemain()
 {
  $this->db->select('*');
  $this->db->from('stu_subject_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','chemistry');
  $this->db->where('stu_exam_syllabus','wet_jeemain');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
// top scorro chapter wise in aipmt
 public function topscchcheaimpt()
 {
  $this->db->select('*');
  $this->db->from('stu_chapter_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','chemistry');
  $this->db->where('stu_exam_syllabus','wet_aipmt');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}

// top scorro chapter wise in jeemain
 public function topscchchejeemain()
 {
  $this->db->select('*');
  $this->db->from('stu_chapter_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','chemistry');
  $this->db->where('stu_exam_syllabus','wet_jeemain');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
// insert questions 
public function insertchequestions($data){
$query =  $this->db->insert('exam_chemistry',$data);
return $query;
}
function selectnewchemq()
{
$this->db->select('exam_chemistry.question');
$this->db->from('exam_chemistry');
$this->db->join('chapter_chemistry','chapter_chemistry.id = exam_chemistry.chapter_id');
$this->db->where('exam_chemistry.new_que','newquestion');
$this->db->select('chapter_chemistry.chapter_name');
	$query = $this->db->get();
	return $query;
}
/* end chemitsry */


/* biology */
public function stubioaimpt()
 {
$this->db->distinct();
$this->db->from('stu_subject_test');
$this->db->where('stu_subject_name','biology');
$this->db->where('stu_exam_syllabus','wet_aipmt');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countbioaimptp()
 
 {
    $this->db->from('stu_subject_test');
	$this->db->where('stu_subject_name','biology');
	$this->db->where('stu_exam_syllabus','wet_aipmt');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
 public function stuchbioaimpt()
 {
$this->db->distinct();
$this->db->from('stu_chapter_test');
$this->db->where('stu_subject_name','biology');
$this->db->where('stu_exam_syllabus','wet_aipmt');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countchbioaimptp()
 
 {
    $this->db->from('stu_chapter_test');
	$this->db->where('stu_subject_name','biology');
	$this->db->where('stu_exam_syllabus','wet_aipmt');
	$phyque = $this->db->count_all_results();
	
	 return($phyque);	 
}
// jeemain
 public function stubiojeemain()
 {
$this->db->distinct();
$this->db->from('stu_subject_test');
$this->db->where('stu_subject_name','biology');
$this->db->where('stu_exam_syllabus','wet_jeemain');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();

  return ($query);
}
 public function countbiojeemain()
 
 {
    $this->db->from('stu_subject_test');
	$this->db->where('stu_subject_name','biology');
	$this->db->where('stu_exam_syllabus','wet_jeemain');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
 public function stuchbiojeemain()
 {
$this->db->distinct();
$this->db->from('stu_chapter_test');
$this->db->where('stu_subject_name','biology');
$this->db->where('stu_exam_syllabus','wet_jeemain');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countchbiojeemain()
 
 {
    $this->db->from('stu_chapter_test');
	$this->db->where('stu_subject_name','biology');
	$this->db->where('stu_exam_syllabus','wet_jeemain');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
  

 // top scoreer in aimpt //
 
 public function topscbioaimpt()
 {
  $this->db->select('*');
  $this->db->from('stu_subject_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','biology');
  $this->db->where('stu_exam_syllabus','wet_aipmt');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
 // top scorer in  jeemain
 public function topscbiojeemain()
 {
  $this->db->select('*');
  $this->db->from('stu_subject_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','biology');
  $this->db->where('stu_exam_syllabus','wet_jeemain');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
// top scorro chapter wise in aipmt
 public function topscchbioaimpt()
 {
  $this->db->select('*');
  $this->db->from('stu_chapter_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','biology');
  $this->db->where('stu_exam_syllabus','wet_aipmt');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}

// top scorro chapter wise in jeemain
 public function topscchbiojeemain()
 {
  $this->db->select('*');
  $this->db->from('stu_chapter_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','biology');
  $this->db->where('stu_exam_syllabus','wet_jeemain');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
// insert questions 
public function insertbioquestions($data){
$query =  $this->db->insert('exam_biology',$data);
return $query;
}
function selectnewbioq()
{
$this->db->select('exam_biology.question');
$this->db->from('exam_biology');
$this->db->join('chapter_biology','chapter_biology.id = exam_biology.chapter_id');
$this->db->where('exam_biology.new_que','newquestion');
$this->db->select('chapter_biology.chapter_name');
	$query = $this->db->get();
	return $query;
}


/* end biology */
 
 /* start maths */
 public function stumathsaimpt()
 {
$this->db->distinct();
$this->db->from('stu_subject_test');
$this->db->where('stu_subject_name','chemistry');
$this->db->where('stu_exam_syllabus','wet_aipmt');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countmathsaimptp()
 
 {
    $this->db->from('stu_subject_test');
	$this->db->where('stu_subject_name','maths');
	$this->db->where('stu_exam_syllabus','wet_aipmt');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
 public function stuchmathsaimpt()
 {
$this->db->distinct();
$this->db->from('stu_chapter_test');
$this->db->where('stu_subject_name','maths');
$this->db->where('stu_exam_syllabus','wet_aipmt');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countchmathsaimptp()
 
 {
    $this->db->from('stu_chapter_test');
	$this->db->where('stu_subject_name','maths');
	$this->db->where('stu_exam_syllabus','wet_aipmt');
	$phyque = $this->db->count_all_results();
	
	 return($phyque);	 
}
// jeemain
 public function stumathsjeemain()
 {
$this->db->distinct();
$this->db->from('stu_subject_test');
$this->db->where('stu_subject_name','maths');
$this->db->where('stu_exam_syllabus','wet_jeemain');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();

  return ($query);
}
 public function countmathsjeemain()
 
 {
    $this->db->from('stu_subject_test');
	$this->db->where('stu_subject_name','maths');
	$this->db->where('stu_exam_syllabus','wet_jeemain');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
 public function stuchmathsjeemain()
 {
$this->db->distinct();
$this->db->from('stu_chapter_test');
$this->db->where('stu_subject_name','maths');
$this->db->where('stu_exam_syllabus','wet_jeemain');
$this->db->select("stu_nam");
$query = $this->db->count_all_results();
  return ($query);
}
  public function countchmathsjeemain()
 
 {
    $this->db->from('stu_chapter_test');
	$this->db->where('stu_subject_name','maths');
	$this->db->where('stu_exam_syllabus','wet_jeemain');
	$phyque = $this->db->count_all_results();
	 return($phyque);	 
}
  

 // top scoreer in aimpt //
 
 public function topscmathsaimpt()
 {
  $this->db->select('*');
  $this->db->from('stu_subject_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','maths');
  $this->db->where('stu_exam_syllabus','wet_aipmt');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
 // top scorer in  jeemain
 public function topscmathsjeemain()
 {
  $this->db->select('*');
  $this->db->from('stu_subject_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','maths');
  $this->db->where('stu_exam_syllabus','wet_jeemain');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
// top scorro chapter wise in aipmt
 public function topscchmathsaimpt()
 {
  $this->db->select('*');
  $this->db->from('stu_chapter_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','maths');
  $this->db->where('stu_exam_syllabus','wet_aipmt');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}

// top scorro chapter wise in jeemain
 public function topscchmathsjeemain()
 {
  $this->db->select('*');
  $this->db->from('stu_chapter_test');
  $this->db->limit(4);
  $this->db->where('stu_subject_name','maths');
  $this->db->where('stu_exam_syllabus','wet_jeemain');
  $this->db->order_by('stu_correct_ans','DESC');
  $query = $this->db->get();
  return ($query);	 
	 
	 
}
// insert questions 
public function insertmathsquestions($data){
$query =  $this->db->insert('exam_maths',$data);
return $query;
/* end maths */
 
}

function selectnewmathsq()
{
$this->db->select('exam_maths.question');
$this->db->from('exam_maths');
$this->db->join('chapter_maths','chapter_maths.id = exam_maths.chapter_id');
$this->db->where('exam_maths.new_que','newquestion');
$this->db->select('chapter_maths.chapter_name');
	$query = $this->db->get();
	return $query;
}

 
 /* new question added count */
 public function countnewchapter_biology(){
$this->db->from('exam_biology');
$this->db->where('new_que','newquestion');
$biology = $this->db->count_all_results();
 return $biology;
 }
 /* new question added count physcics */
 public function countnewchapter_physics(){
$this->db->from('exam_physics');
$this->db->where('new_que','newquestion');
$phy = $this->db->count_all_results();
 return $phy;
 }
 /* new question added count */
 public function countnewchapter_maths(){
$this->db->from('exam_maths');
$this->db->where('new_que','newquestion');
$maths = $this->db->count_all_results();
 return $maths;
 }
 /* new question added count */
 public function countnewchapter_chemistry(){
$this->db->from('exam_chemistry');
$this->db->where('new_que','newquestion');
$chem = $this->db->count_all_results();
 return $chem;
 }
 /* new question added count */
 
 /* student regitsraton */
 
 function insert_data($data)
 {
$query = $this->db->insert('registration',$data);	 
return $query;

 }
 function allstudent()
 {
  $this->db->select('*');
  $this->db->from('registration');
  $query = $this->db->get();
  return $query;	 
 }
 
 function deletestudent($id)
 
 {
   $this->db->where('id',$id);	 
   $query = $this->db->delete('registration');	 
 return $query;
 }
  function editstudent($id)
  {
  $this->db->select('*');
  $this->db->from('registration');
  $this->db->where('id',$id);
  $query = $this->db->get();
  return $query;
  }
  
  function update_data($data,$id)
  {

$this->db->where('id',$id);
$query = $this->db->update('registration',$data);
	  return $query;
	  
  }
  /*  jeemain  view profile */ 
  function viewprofile_maths_jeemain($id)
  
  {
	$this->db->select('*');
	$this->db->from('registration');
	$this->db->join('stu_subject_test','registration.id = stu_subject_test.stu_id');
	$this->db->where('stu_subject_test.stu_id',$id);
	$this->db->where('stu_subject_test.stu_subject_name','maths');
     $this->db->where('stu_exam_syllabus','wet_jeemain');
	$query = $this->db->count_all_results();
	 return $query ;
  }
  
  function  viewprofile_maths_jeemain_chapter($id)
  {
  $query = $this->db->query("SELECT stu_chapter_name,COUNT(*) FROM `stu_chapter_test` where stu_subject_name ='maths' and stu_exam_syllabus='wet_jeemain' and stu_id ='$id' group by stu_chapter_name");
   if($query->num_rows() >0)
   {
    return $query->result_array();
   }
   else
   {
    return false;
   }
 }
  function viewprofile_chemistry_jeemain($id)
  {
	$this->db->select('*');
	$this->db->from('registration');
	$this->db->join('stu_subject_test','registration.id = stu_subject_test.stu_id');
	$this->db->where('stu_subject_test.stu_id',$id);
	$this->db->where('stu_subject_test.stu_subject_name','chemistry');
     $this->db->where('stu_exam_syllabus','wet_jeemain');
	$query1 = $this->db->count_all_results(); 
  return $query1;
  }
    function  viewprofile_chemistry_jeemain_chapter($id)
  {
  $query = $this->db->query("SELECT stu_chapter_name,COUNT(*) FROM `stu_chapter_test` where stu_subject_name ='chemistry' and stu_exam_syllabus='wet_jeemain' and stu_id ='$id' group by stu_chapter_name");
   if($query->num_rows() >0)
   {
    return $query->result_array();
   }
   else
   {
    return false;
   }
 }
    function viewprofile_physics_jeemain($id)
  {
	$this->db->select('*');
	$this->db->from('registration');
	$this->db->join('stu_subject_test','registration.id = stu_subject_test.stu_id');
	$this->db->where('stu_subject_test.stu_id',$id);
	$this->db->where('stu_subject_test.stu_subject_name','physics');
     $this->db->where('stu_exam_syllabus','wet_jeemain');
	$query2 = $this->db->count_all_results(); 
  return $query2;
  }  
    function  viewprofile_physics_jeemain_chapter($id)
  {
  $query = $this->db->query("SELECT stu_chapter_name,COUNT(*) FROM `stu_chapter_test` where stu_subject_name ='physics' and stu_exam_syllabus='wet_jeemain' and stu_id ='$id' group by stu_chapter_name");
   if($query->num_rows() >0)
   {
    return $query->result_array();
   }
   else
   {
    return false;
   }
 }
  function viewprofile_biology_aimpt($id)
  
  {
	$this->db->select('*');
	$this->db->from('registration');
	$this->db->join('stu_subject_test','registration.id = stu_subject_test.stu_id');
	$this->db->where('stu_subject_test.stu_id',$id);
	$this->db->where('stu_subject_test.stu_subject_name','biology');
     $this->db->where('stu_exam_syllabus','wet_aipmt');
	$query = $this->db->count_all_results();
	 return $query ;
  }
  function  viewprofile_biology_aipmt_chapter($id)
  {
  $query = $this->db->query("SELECT stu_chapter_name,COUNT(*) FROM `stu_chapter_test` where stu_subject_name ='biology' and stu_exam_syllabus='wet_aipmt' and stu_id ='$id' group by stu_chapter_name");
   if($query->num_rows() >0)
   {
    return $query->result_array();
   }
   else
   {
    return false;
   }
 }
  
  
  function viewprofile_chemistry_aimpt($id)
  {
	$this->db->select('*');
	$this->db->from('registration');
	$this->db->join('stu_subject_test','registration.id = stu_subject_test.stu_id');
	$this->db->where('stu_subject_test.stu_id',$id);
	$this->db->where('stu_subject_test.stu_subject_name','chemistry');
     $this->db->where('stu_exam_syllabus','wet_aimpt');
	$query1 = $this->db->count_all_results(); 
  return $query1;
  }
    function  viewprofile_chemistry_aipmt_chapter($id)
  {
  $query = $this->db->query("SELECT stu_chapter_name,COUNT(*) FROM `stu_chapter_test` where stu_subject_name ='chemistry' and stu_exam_syllabus='wet_aipmt' and stu_id ='$id' group by stu_chapter_name");
   if($query->num_rows() >0)
   {
    return $query->result_array();
   }
   else
   {
    return false;
   }
 }
    function viewprofile_physics_aimpt($id)
  {
	$this->db->select('*');
	$this->db->from('registration');
	$this->db->join('stu_subject_test','registration.id = stu_subject_test.stu_id');
	$this->db->where('stu_subject_test.stu_id',$id);
	$this->db->where('stu_subject_test.stu_subject_name','physics');
     $this->db->where('stu_exam_syllabus','wet_aipmt');
	$query2 = $this->db->count_all_results(); 
  return $query2;
  }  
 function  viewprofile_physics_aipmt_chapter($id)
  {
  $query = $this->db->query("SELECT stu_chapter_name,COUNT(*) FROM `stu_chapter_test` where stu_subject_name ='physics' and stu_exam_syllabus='wet_aipmt' and stu_id ='$id' group by stu_chapter_name");
   if($query->num_rows() >0)
   {
    return $query->result_array();
   }
   else
   {
    return false;
   }
 }
  
  function viewprofile($id)
  {
	$this->db->select('*');
	$this->db->from('registration');
	$this->db->where('id',$id);
	$query = $this->db->get();
	return $query;  
  }
 	  
}

