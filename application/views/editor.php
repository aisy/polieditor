<?php $this->load->view('partials/header'); ?>

<div id="konten">
			<div class="per-dua code-html">
				<form method="post" action="<?php echo base_url('asset/libraries/eksekusi.php') ?>" target="output">
					<a href="#openCDN" class="opencdn" title="CDN">+</a>
					<span class="title">HTML</span>
					<input type="submit" name="preview" class="btn-preview" value="Preview"/>
					<textarea id="html" name="html" placeholder="&lt;h1&gt;Hello, World!&lt;/h1&gt;"></textarea>
					<a href="#openCDN" class="opencdn" title="CDN">+</a>
					<span class="title">CSS</span>
					<textarea id="css" name="css" placeholder="h1 { color: red; }"></textarea>
					<a href="#openCDN" class="opencdn" title="CDN">+</a>
					<span class="title">JS</span>
					<textarea id="js" name="js" placeholder="var anu = 'Awesome';"></textarea>
					<div id="openCDN" class="modalDialog">
						<div>
							<h2>Add External CSS Or JavaScript</h2>
							<div id="cdn">
								<input name="cdn_url[]" type="text" class="cdn-input" placeholder="css or js"><span title="add" id="add">+</span>
							</div>
							<p><a href="#close" title="Close" class="close">Save & Close</a></p>
						</div>
					</div>
				</form>
			</div><div class="per-dua code-preview"><iframe name="output" src="<?php echo base_url('asset/libraries/eksekusi.php') ?>"></iframe></div>
		</div>

<?php $this->load->view('partials/footer'); ?>
