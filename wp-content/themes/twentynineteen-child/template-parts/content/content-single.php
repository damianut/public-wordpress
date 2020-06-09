<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php
        $cand_data = get_data_from_intersynergy_user()[0];
        $json_data = get_json_all_candidate_data($cand_data->id);
        ?>
        <table id="candidate_data">
            <tr>
                <td>ID z tabeli `user`</td>
                <td><?php echo $cand_data->id; ?></td>
            </tr>
            <tr>
                <td>Imię</td>
                <td><?php echo $cand_data->name; ?></td>
            </tr>
            <tr>
                <td>Nazwisko</td>
                <td><?php echo $cand_data->surname; ?></td>
            </tr>
            <tr>
                <td>PESEL</td>
                <td><?php echo $cand_data->pesel; ?></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td><?php echo $cand_data->nip; ?></td>
            </tr>
            <tr>
                <td>Adres zamieszkania</td>
                <td><?php echo $cand_data->address; ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><?php echo $cand_data->email; ?></td>
            </tr>
            <tr>
                <td>Opis osoby</td>
                <td><?php echo $cand_data->person_description; ?></td>
            </tr>
            <tr>
                <td>Zainteresowania</td>
                <td><?php echo $cand_data->interests; ?></td>
            </tr>
            <tr>
                <td>Umiejętności</td>
                <td><?php echo $cand_data->skills; ?></td>
            </tr>
            <tr>
                <td>Doświadczenie</td>
                <td><?php echo $cand_data->experience; ?></td>
            </tr>
            <tr>
                <td>Data urodzenia</td>
                <td><?php echo $cand_data->birth_date; ?></td>
            </tr>
            <tr>
                <td>Data rejestracji</td>
                <td><?php echo $cand_data->registration_date; ?></td>
            </tr>
            <tr>
                <td>Ocena osoby</td>
                <td><?php echo $cand_data->rating; ?></td>
            </tr>
            <tr>
                <td>CV</td>
                <td>
                <?php if ($cand_data->cvfilename) : ?>
                <a href="http://localhost:8000/upload/pdf/<?php echo $cand_data->cvfilename; ?>">Curriculum Vitae</a>
                <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>REST API DATA</td>
                <td><?php echo $json_data; ?></td>
            </tr>
        </table>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
