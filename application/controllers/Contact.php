<?php
class Contact extends CI_Controller {
	public function index() {
		//Helpers
		$this->load->helper(array('form', 'url'));
		$this->load->helper('array');
		//Form class (Library)
		$this->load->library('form_validation');
		//Validation Rules
	$this->form_validation->set_rules('cat_name','Nombre Categoría','required', array('required' => 'Escriba un Nombre'));
	$this->form_validation->set_rules('details','Detalles', 'required', array('required' => 'Se requieren Detalles'));
	$this->form_validation->set_rules('status','Estatus', 'required', array('required' => 'Declare un status'));

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('contacto');
                        
                }
                else
                {
                		$data = array( 
   						'categoría' => $this->input->post('cat_name'), 
   						'detalles' => $this->input->post('details'),
   						'estatus' => $this->input->post('status') 
						); 

						$this->db->insert("categorias", $data);

					$cursos = $this->db->get_where("cursos", array('categoria' => $this->input->post('cat_name')))->result();
					$data = array('nombre' => $cursos[0]->nombre,
								'categoria' => $cursos[0]->categoria,
								'horas' => $cursos[0]->horas,
								'detalles' => $cursos[0]->detalles,
								'precio' => $cursos[0]->precio);
                    $this->load->view('contacto_success', $data);

					}
				


                
}
}
?>