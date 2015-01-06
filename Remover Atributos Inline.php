<?php
#-------------------------#
	# Remover atributos de etiquetas HTML
	# @tipo STRING
	# @uso -> removerAttrDOM( $html, $atributos = [ ] );
#-------------------------#
function removerAttrDOM( $html, $atributos = [ ] ) {
	if( !strlen( $html ) ) return $html; //No se puede pasar un empty string!

	$dom = new DOMDocument;
	$dom->loadHTML( $html );
	$nodos = $dom->getElementsByTagName( '*' ); //Obtengo todos los nodos( etiquetas )
	
	foreach( $nodos as $nodo ) {
		//ATRIBUTOS
		foreach ( $atributos as $trash => $attr ) {
			if ( $nodo->hasAttribute( $attr ) ) { //Si existe
				$node->removeAttribute('onload'); //Lo elimino!
			}
		}
	}
	return $dom->saveHTML();
}

#EJEMPLO DE USO
/*
	removerAttrDOM( $html , [ 'onclick', 'onload', 'src', 'href' ] );
*/
?>