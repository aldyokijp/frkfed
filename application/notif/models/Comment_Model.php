<?php

class Comment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get comment by comment_id
     */
    function get_comment($comment_id)
    {
        return $this->db->get_where('comments',array('comment_id'=>$comment_id))->row_array();
    }
    
    /*
     * Get all comments count
     */
    function get_all_comments_count()
    {
        $this->db->from('comments');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all comments
     */
    function get_all_comments($params = array())
    {
        $this->db->order_by('comment_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('comments')->result_array();
    }
        
    /*
     * function to add new comment
     */
    function add_comment($params)
    {
        $this->db->insert('comments',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update comment
     */
    function update_comment($comment_id,$params)
    {
        $this->db->where('comment_id',$comment_id);
        return $this->db->update('comments',$params);
    }
    
    /*
     * function to delete comment
     */
    function delete_comment($comment_id)
    {
        return $this->db->delete('comments',array('comment_id'=>$comment_id));
    }
}